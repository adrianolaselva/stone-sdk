<?php

namespace Tests\Integracao\Stone;

use Integracao\Stone\Client;
use Integracao\Stone\Credenciamento\Constants\StoneParameterConst;

/**
 * Class PHPUnit
 * @package Tests\Integracao\Stone
 */
class PHPUnit extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * PHPUnit constructor.
     */
    public function __construct()
    {
        $this->client = new \Integracao\Stone\Client([
            StoneParameterConst::STONE_HOST => getenv(StoneParameterConst::STONE_HOST),
            StoneParameterConst::STONE_TIMEOUT => getenv(StoneParameterConst::STONE_TIMEOUT),
            StoneParameterConst::STONE_USERID => getenv(StoneParameterConst::STONE_USERID),
            StoneParameterConst::STONE_SECRETKEY => getenv(StoneParameterConst::STONE_SECRETKEY),
        ]);
    }
}