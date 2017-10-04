<?php

namespace Integracao\Stone\Credenciamento\Contracts;

/**
 * Class MerchantExtraData
 * @package Integracao\Stone\Credenciamento\Contracts
 */
class MerchantExtraData implements \JsonSerializable
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $value;

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return MerchantExtraData
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return MerchantExtraData
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    function jsonSerialize()
    {
        return [
            'Key' => $this->key,
            'Value' => $this->value,
        ];
    }

}