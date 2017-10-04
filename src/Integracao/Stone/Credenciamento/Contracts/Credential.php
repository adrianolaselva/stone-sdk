<?php

namespace Integracao\Stone\Credenciamento\Contracts;


class Credential implements \JsonSerializable
{
    /**
     * @var string
     */
    protected $userId;

    /**
     * @var string
     */
    protected $signature;

    /**
     * @var string
     */
    protected $effectiveUserId;

    /**
     * @var string
     */
    protected $sourceIp;

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return Credential
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return Credential
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveUserId()
    {
        return $this->effectiveUserId;
    }

    /**
     * @param string $effectiveUserId
     * @return Credential
     */
    public function setEffectiveUserId($effectiveUserId)
    {
        $this->effectiveUserId = $effectiveUserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceIp()
    {
        return $this->sourceIp;
    }

    /**
     * @param string $sourceIp
     * @return Credential
     */
    public function setSourceIp($sourceIp)
    {
        $this->sourceIp = $sourceIp;
        return $this;
    }



    function jsonSerialize()
    {
        return [
            'UserId' => $this->userId,
            'Signature' => $this->signature,
            'EffectiveUserId' => $this->effectiveUserId,
            'SourceIp' => $this->sourceIp,
        ];
    }

}