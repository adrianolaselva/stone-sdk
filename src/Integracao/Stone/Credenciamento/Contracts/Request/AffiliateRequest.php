<?php

namespace Integracao\Stone\Credenciamento\Contracts\Request;

use Integracao\Stone\Credenciamento\Contracts\Credential;
use Integracao\Stone\Credenciamento\Contracts\Merchant;

/**
 * Class AffiliateRequest
 * @package Integracao\Stone\Credenciamento\Contracts\Request
 */
class AffiliateRequest implements \JsonSerializable
{
    /**
     * @var Credential
     */
    private $credential;

    /**
     * @var bool
     */
    private $bypassCreditAnalysis = false;

    /**
     * @var Merchant
     */
    private $merchant;

    /**
     * @return Credential
     */
    public function getCredential()
    {
        return $this->credential;
    }

    /**
     * @param Credential $credential
     * @return AffiliateRequest
     */
    public function setCredential($credential)
    {
        $this->credential = $credential;
        return $this;
    }

    /**
     * @return Merchant
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param Merchant $merchant
     * @return AffiliateRequest
     */
    public function setMerchant($merchant)
    {
        $this->merchant = $merchant;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBypassCreditAnalysis()
    {
        return $this->bypassCreditAnalysis;
    }

    /**
     * @param bool $bypassCreditAnalysis
     * @return AffiliateRequest
     */
    public function setBypassCreditAnalysis($bypassCreditAnalysis)
    {
        $this->bypassCreditAnalysis = $bypassCreditAnalysis;
        return $this;
    }

    function jsonSerialize()
    {
        return [
            'Credential' => $this->credential,
            'BypassCreditAnalysis' => $this->bypassCreditAnalysis,
            'Merchant' => $this->merchant
        ];
    }

}