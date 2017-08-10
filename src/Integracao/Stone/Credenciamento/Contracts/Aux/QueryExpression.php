<?php

namespace Integracao\Stone\Credenciamento\Contracts\Aux;

/**
 * Class QueryExpression
 * @package Integracao\Stone\Credenciamento\Contracts\Aux
 */
class QueryExpression implements \JsonSerializable
{

    /**
     * @var array
     */
    private $conditionList;
    
    /**
     * @return array
     */
    public function getConditionList()
    {
        return $this->conditionList;
    }

    /**
     * @param array $conditionList
     * @return QueryExpression
     */
    public function setConditionList($conditionList)
    {
        $this->conditionList = $conditionList;
        return $this;
    }

    function jsonSerialize()
    {
        return [
            'ConditionList' => $this->conditionList
        ];
    }

}