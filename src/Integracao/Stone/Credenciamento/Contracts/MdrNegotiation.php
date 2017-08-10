<?php

namespace Integracao\Stone\Credenciamento\Contracts;

/**
 * Class MdrNegotiation
 * @package Integracao\Stone\Credenciamento
 */
class MdrNegotiation implements \JsonSerializable
{

    /**
     * @var integer
     */
    private $cardBrand;

    /**
     * @var float
     */
    private $rate;

    /**
     * @var integer
     */
    private $transactionProfile;

    /**
     * @return int
     */
    public function getCardBrand()
    {
        return $this->cardBrand;
    }

    /**
     * @param int $cardBrand
     * @return MdrNegotiation
     */
    public function setCardBrand($cardBrand)
    {
        $this->cardBrand = $cardBrand;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     * @return MdrNegotiation
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransactionProfile()
    {
        return $this->transactionProfile;
    }

    /**
     * @param int $transactionProfile
     * @return MdrNegotiation
     */
    public function setTransactionProfile($transactionProfile)
    {
        $this->transactionProfile = $transactionProfile;
        return $this;
    }

    function jsonSerialize()
    {
        return [
            'CardBrand' => $this->cardBrand,
            'Rate' => $this->rate,
            'TransactionProfile' => $this->transactionProfile,
        ];
    }

}