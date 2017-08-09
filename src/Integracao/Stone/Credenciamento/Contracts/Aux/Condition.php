<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 09/08/17
 * Time: 17:49
 */

namespace Integracao\Stone\Credenciamento\Contracts\Aux;


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