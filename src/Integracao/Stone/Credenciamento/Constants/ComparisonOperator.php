<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 09/08/17
 * Time: 17:57
 */

namespace Integracao\Stone\Credenciamento\Constants;

/**
 * Class ComparisonOperator
 * @package Integracao\Stone\Credenciamento\Constants
 */
class ComparisonOperator
{
    const COMPARISON_EQUALS = 'Equals';
    const COMPARISON_NOT_EQUAL_TO = 'NotEqualTo';
    const COMPARISON_GREATER_THAN = 'GreaterThan';
    const COMPARISON_LESS_THAN = 'LessThan';
    const COMPARISON_GREATER_THAN_OR_EQUAL_TO = 'GreaterThanOrEqualTo';
    const COMPARISON_LESS_THAN_OR_EQUAL_TO = 'LessThanOrEqualTo';
    const COMPARISON_IN = 'In';
    const COMPARISON_NOT_IN = 'NotIn';
    const COMPARISON_LIKE = 'Like';
    const COMPARISON_IS_NULL = 'IsNull';
    const COMPARISON_IS_NOT_NULL = 'IsNotNull';
}