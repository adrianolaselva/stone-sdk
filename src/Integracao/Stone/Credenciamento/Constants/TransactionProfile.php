<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 09/08/17
 * Time: 18:31
 */

namespace Integracao\Stone\Credenciamento\Constants;

/**
 * Class TransactionProfile
 * @package Integracao\Stone\Credenciamento\Constants
 */
class TransactionProfile
{
    const CREDITO_A_VISTA = 1;
    const CREDITO_DE_2_A_6_PARCELAS_S_JUROS = 2;
    const CREDITO_DE_7_A_12_PARCELAS_S_JUROS = 3;
    const CREDITO_COM_PARCELAS_S_JUROS = 4;
    const DEBITO = 5;
}