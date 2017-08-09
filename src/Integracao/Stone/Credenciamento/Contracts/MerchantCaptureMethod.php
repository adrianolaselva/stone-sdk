<?php

namespace Integracao\Stone\Credenciamento\Contracts;


class MerchantCaptureMethod implements \JsonSerializable
{
    /**
     * @var string
     */
    private $terminalTypeId;

    /**
     * @var string
     */
    private $terminalModelId;

    /**
     * @var string
     */
    private $serialNumber;

    /**
     * @var string
     */
    private $mobileCarrierId;

    /**
     * @var string
     */
    private $url;

    /**
     * @return string
     */
    public function getTerminalTypeId()
    {
        return $this->terminalTypeId;
    }

    /**
     * @param string $terminalTypeId
     * @return MerchantCaptureMethod
     */
    public function setTerminalTypeId($terminalTypeId)
    {
        $this->terminalTypeId = $terminalTypeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTerminalModelId()
    {
        return $this->terminalModelId;
    }

    /**
     * @param string $terminalModelId
     * @return MerchantCaptureMethod
     */
    public function setTerminalModelId($terminalModelId)
    {
        $this->terminalModelId = $terminalModelId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @param string $serialNumber
     * @return MerchantCaptureMethod
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobileCarrierId()
    {
        return $this->mobileCarrierId;
    }

    /**
     * @param string $mobileCarrierId
     * @return MerchantCaptureMethod
     */
    public function setMobileCarrierId($mobileCarrierId)
    {
        $this->mobileCarrierId = $mobileCarrierId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return MerchantCaptureMethod
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    function jsonSerialize()
    {
        return [
            'TerminalTypeId' => $this->terminalTypeId,
            'TerminalModelId' => $this->terminalModelId,
            'SerialNumber' => $this->serialNumber,
            'MobileCarrierId' => $this->mobileCarrierId,
            'Url' => $this->url,
        ];
    }

}