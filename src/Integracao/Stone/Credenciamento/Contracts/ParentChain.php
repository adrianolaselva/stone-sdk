<?php

namespace Integracao\Stone\Credenciamento\Contracts;

/**
 * Class ParentChain
 * @package Integracao\Stone\Credenciamento\Contracts
 */
class ParentChain implements \JsonSerializable
{

    /**
     * @var integer
     */
    private $typeId;

    /**
     * @var string
     */
    private $chainIdentifier;

    /**
     * @return int
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param int $typeId
     * @return ParentChain
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getChainIdentifier()
    {
        return $this->chainIdentifier;
    }

    /**
     * @param string $chainIdentifier
     * @return ParentChain
     */
    public function setChainIdentifier($chainIdentifier)
    {
        $this->chainIdentifier = $chainIdentifier;
        return $this;
    }

    function jsonSerialize()
    {
        return [
            'TypeId' => $this->typeId,
            'ChainIdentifier' => $this->chainIdentifier
        ];
    }

}