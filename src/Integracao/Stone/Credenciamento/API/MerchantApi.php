<?php

namespace Integracao\Stone\Credenciamento\API;

use GuzzleHttp\Exception\RequestException;
use Integracao\Stone\AbstractAPI;
use Integracao\Stone\Client;
use Integracao\Stone\Credenciamento\Contracts\Merchant;
use Integracao\Stone\Credenciamento\Contracts\Request\AffiliateRequest;
use Integracao\Stone\Credenciamento\Contracts\Request\ListMerchantRequest;
use Integracao\Stone\Credenciamento\Contracts\Request\ListTerminalDevicesRequest;

/**
 * Class MerchantApi
 * @package Integracao\Stone\Credenciamento\API
 */
class MerchantApi extends AbstractAPI
{
    /**
     * MerchantApi constructor.
     */
    public function __construct(Client $client = null)
    {
        parent::__construct('Merchant/MerchantService.svc/Merchant', $client);
    }

    /**
     * @param AffiliateRequest $affiliateRequest
     * @return mixed
     * @throws \Exception
     */
    public function affiliate(AffiliateRequest $affiliateRequest)
    {
        try{
            $affiliateRequest->setCredential($this->getCredentials(
                sprintf("%s-%s",
                    $affiliateRequest->getMerchant()->getDocumentNumber(),
                    $affiliateRequest->getMerchant()->getCompanyName()
                )
            ));

            $this->response = $this->httpClient->post('Affiliate/',[
                'body' => json_encode($affiliateRequest),
            ]);

            return $this->response->json();
        }catch (RequestException $ex) {
            $this->requestException($ex);
        }catch (\Exception $ex){
            throw new \Exception($ex->getMessage(), $ex->getCode(), $ex);
        }
    }

    /**
     * @param ListMerchantRequest $listMerchantRequest
     * @return mixed
     * @throws \Exception
     */
    public function listMerchants(ListMerchantRequest $listMerchantRequest)
    {
        try{
            $listMerchantRequest->setCredential($this->getCredentials(
                "ListMerchants"
            ));

            $this->response = $this->httpClient->post('ListMerchants/',[
                'body' => json_encode($listMerchantRequest),
            ]);

            return $this->response->json();
        }catch (RequestException $ex) {
            $this->requestException($ex);
        }catch (\Exception $ex){
            throw new \Exception($ex->getMessage(), $ex->getCode(), $ex);
        }
    }

    /**
     * @param ListTerminalDevicesRequest $listTerminalDevicesRequest
     * @return mixed
     * @throws \Exception
     */
    public function listTerminalDevices(ListTerminalDevicesRequest $listTerminalDevicesRequest)
    {
        try{
            $listTerminalDevicesRequest->setCredential($this->getCredentials(
                "ListPagedTerminalDevices"
            ));

            $this->response = $this->httpClient->post('ListTerminalDevices/',[
                'body' => json_encode($listTerminalDevicesRequest),
            ]);

            return $this->response->json();
        }catch (RequestException $ex) {
            $this->requestException($ex);
        }catch (\Exception $ex){
            throw new \Exception($ex->getMessage(), $ex->getCode(), $ex);
        }
    }

}