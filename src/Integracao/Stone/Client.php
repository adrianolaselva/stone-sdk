<?php
namespace Integracao\Stone;

use Integracao\Stone\Credenciamento\Constants\StoneParameterConst;


/**
 * Class Client
 * @package Sdk\Integracao\NTKPedido
 */
class Client
{

    /**
     * Timeout padrão
     *
     * @var integer
     */
    const STONE_TIMEOUT_DEFAULT = 25;

    /**
     * Parâmetros, pré inicializado com valores padrão
     *
     * @var array
     */
    private $params = [
        STONEParameterConst::STONE_TIMEOUT => self::STONE_TIMEOUT_DEFAULT,
    ];

    /**
     * Client constructor.
     * @param array|null $params
     */
    public function __construct(array $params = null)
    {
        $this->loadParameters($params);
    }

    /**
     * Obter parâmetro
     *
     * @param $key
     * @return mixed
     */
    public function getParameter($key)
    {
        return isset($this->params[$key]) ? $this->params[$key] : null;
    }

    /**
     * Adicionar Parâmetro
     *
     * @param $key
     * @param $value
     * @return $this
     */
    public function setParameter($key, $value)
    {
        $this->params[$key] = $value;
        $this->loadParameters($this->params);
        return $this;
    }

    /**
     * @param $params
     * @throws \Exception
     */
    private function loadParameters($params)
    {
        $this->params[StoneParameterConst::STONE_HOST] = getenv('STONE_HOST');
        $this->params[StoneParameterConst::STONE_USERID] = getenv('STONE_USERID');
        $this->params[StoneParameterConst::STONE_SECRETKEY] = getenv('STONE_SECRETKEY');
        $this->params[StoneParameterConst::STONE_TIMEOUT] = getenv('STONE_TIMEOUT');

        if(!is_null($params))
            foreach ($params as $key => $param)
            {
                if(!in_array($key, [
                    StoneParameterConst::STONE_HOST,
                    StoneParameterConst::STONE_TIMEOUT,
                    StoneParameterConst::STONE_USERID,
                    StoneParameterConst::STONE_SECRETKEY,

                ]))
                    throw new \Exception(sprintf("Parâmetro %s inválido", $key));
            }

        if(!is_null($params) && is_array($params))
            foreach ($params as $key => $value)
                $this->params[$key] = $value;

    }

}







