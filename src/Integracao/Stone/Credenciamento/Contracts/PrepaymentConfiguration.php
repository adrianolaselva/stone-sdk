<?php

namespace Integracao\Stone\Credenciamento\Contracts;

/**
 * Class PrepaymentConfiguration
 * @package Integracao\Stone\Credenciamento\Contracts
 */
class PrepaymentConfiguration implements \JsonSerializable
{

    /**
     * @var float
     */
    private $automaticRate;

    /**
     * @var boolean
     */
    private $enableAutomaticPrepayment;

    /**
     * @var float
     */
    private $spotRate;

    /**
     * @return float
     */
    public function getAutomaticRate()
    {
        return $this->automaticRate;
    }

    /**
     * @param float $automaticRate
     * @return PrepaymentConfiguration
     */
    public function setAutomaticRate($automaticRate)
    {
        $this->automaticRate = $automaticRate;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEnableAutomaticPrepayment()
    {
        return $this->enableAutomaticPrepayment;
    }

    /**
     * @param bool $enableAutomaticPrepayment
     * @return PrepaymentConfiguration
     */
    public function setEnableAutomaticPrepayment($enableAutomaticPrepayment)
    {
        $this->enableAutomaticPrepayment = $enableAutomaticPrepayment;
        return $this;
    }

    /**
     * @return float
     */
    public function getSpotRate()
    {
        return $this->spotRate;
    }

    /**
     * @param float $spotRate
     * @return PrepaymentConfiguration
     */
    public function setSpotRate($spotRate)
    {
        $this->spotRate = $spotRate;
        return $this;
    }

    function jsonSerialize()
    {
        return [
            'AutomaticRate' => $this->automaticRate,
            'EnableAutomaticPrepayment' => $this->enableAutomaticPrepayment,
            'SpotRate' => $this->spotRate,
        ];
    }

}