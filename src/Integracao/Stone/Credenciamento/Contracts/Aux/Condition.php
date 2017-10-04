<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 09/08/17
 * Time: 17:49
 */

namespace Integracao\Stone\Credenciamento\Contracts\Aux;

/**
 * Class Condition
 * @package Integracao\Stone\Credenciamento\Contracts\Aux
 */
class Condition implements \JsonSerializable
{

    /**
     * @var string
     */
    private $__type;

    /**
     * @var string
     */
    private $logicalOperator;

    /**
     * @var string
     */
    private $comparisonOperator;

    /**
     * @var string
     */
    private $field;

    /**
     * @var string
     */
    private $value;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->__type;
    }

    /**
     * @param string $_type
     * @return Condition
     */
    public function setType($_type)
    {
        $this->__type = $_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogicalOperator()
    {
        return $this->logicalOperator;
    }

    /**
     * @param string $logicalOperator
     * @return Condition
     */
    public function setLogicalOperator($logicalOperator)
    {
        $this->logicalOperator = $logicalOperator;
        return $this;
    }

    /**
     * @return string
     */
    public function getComparisonOperator()
    {
        return $this->comparisonOperator;
    }

    /**
     * @param string $comparisonOperator
     * @return Condition
     */
    public function setComparisonOperator($comparisonOperator)
    {
        $this->comparisonOperator = $comparisonOperator;
        return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param string $field
     * @return Condition
     */
    public function setField($field)
    {
        $this->field = $field;
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
     * @return Condition
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    function jsonSerialize()
    {
        return [
            '__type' => $this->__type,
            'LogicalOperator' => $this->logicalOperator,
            'ComparisonOperator' => $this->comparisonOperator,
            'Field' => $this->field,
            'Value' => $this->value,
        ];
    }

}