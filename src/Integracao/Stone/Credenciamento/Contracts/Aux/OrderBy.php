<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 09/08/17
 * Time: 18:03
 */

namespace Integracao\Stone\Credenciamento\Contracts\Aux;

/**
 * Class OrderBy
 * @package Integracao\Stone\Credenciamento\Contracts\Aux
 */
class OrderBy implements \JsonSerializable
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
     * @return OrderBy
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
     * @return OrderBy
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