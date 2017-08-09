<?php

namespace Integracao\Stone\Credenciamento\Contracts\Aux;

/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 09/08/17
 * Time: 17:47
 */
class QueryExpression implements \JsonSerializable
{

    function jsonSerialize()
    {
        return [
            'ConditionList'
        ];
    }

}