<?php
namespace Integracao\Stone;

use GuzzleHttp;
use Integracao\Stone\Credenciamento\Constants\StoneParameterConst;
use Integracao\Stone\Credenciamento\Contracts\Credential;

/**
 * Class AbstractAPI
 * @package Integracao\NTKPedido
 */
abstract class AbstractAPI
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var GuzzleHttp\Client
     */
    protected $httpClient;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $endpoint;

    /**
     * @var GuzzleHttp\Query
     */
    protected $query;

    /**
     * @var GuzzleHttp\Message\ResponseInterface
     */
    protected $response;

    /**
     * @var array
     */
    protected $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
        'Cache-Control' => 'no-cache',
    ];

    /**
     * AbstractAPI constructor.
     * @param $endpoint
     * @param Client|null $client
     */
    protected function __construct($endpoint, Client $client = null)
    {
        $this->endpoint = $endpoint;
        $this->client = $client;

        if(is_null($this->client))
            $this->client = new Client();

        $this->query = new GuzzleHttp\Query();
        $this->query->setEncodingType(false);

        $this->httpClient = new GuzzleHttp\Client([
            'base_url' => sprintf("%s/%s/",
                $this->client->getParameter(StoneParameterConst::STONE_HOST),
                $this->endpoint
            ),
            'timeout' => $this->client->getParameter(StoneParameterConst::STONE_TIMEOUT),
            'verify' => false,
            'defaults' => [
                'headers' => $this->headers,
                'query' => $this->query
            ]
        ]);
    }

    /**
     * @param $data
     * @return Credential
     */
    protected function getCredentials($data)
    {
        $signature = hash_hmac(
            'sha512',
            $data,
            $this->client->getParameter(StoneParameterConst::STONE_SECRETKEY)
        );

        return (new Credential())
            ->setUserId($this->client->getParameter(StoneParameterConst::STONE_USERID))
            ->setSignature($signature);
    }

    /**
     * @return GuzzleHttp\Message\ResponseInterface
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param GuzzleHttp\Exception\RequestException $ex
     * @param string $message
     * @throws \Exception
     */
    protected function requestException(GuzzleHttp\Exception\RequestException $ex, $message = "Falha de requisição")
    {
        if ($ex->hasResponse())
        {
            throw new \Exception(sprintf("%s code => [%s] body => [%s] (URL: %s)",
                    $message,
                    $ex->getResponse()->getStatusCode(),
                    $ex->getResponse()->getBody(),
                    $ex->getResponse()->getEffectiveUrl()
                )
            );
        }

        throw new \Exception($message, $ex->getCode(), $ex);
    }

}