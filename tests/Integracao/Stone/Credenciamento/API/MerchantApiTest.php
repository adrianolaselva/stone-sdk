<?php

namespace Tests\Integracao\Stone\Credenciamento\API;

use Integracao\Stone\Credenciamento\API\MerchantApi;
use Integracao\Stone\Credenciamento\Constants\BankAccountTypeConst;
use Integracao\Stone\Credenciamento\Constants\CardBrandConst;
use Integracao\Stone\Credenciamento\Constants\CountryConst;
use Integracao\Stone\Credenciamento\Constants\DocumentTypeConst;
use Integracao\Stone\Credenciamento\Constants\StoneParameterConst;
use Integracao\Stone\Credenciamento\Constants\StoneResponseCode;
use Integracao\Stone\Credenciamento\Constants\TerminalTypeConst;
use Integracao\Stone\Credenciamento\Contracts\BankAccount;
use Integracao\Stone\Credenciamento\Contracts\Credential;
use Integracao\Stone\Credenciamento\Contracts\Merchant;
use Integracao\Stone\Credenciamento\Contracts\MerchantAddress;
use Integracao\Stone\Credenciamento\Contracts\MerchantCaptureMethod;
use Integracao\Stone\Credenciamento\Contracts\MerchantContact;
use Integracao\Stone\Credenciamento\Contracts\MerchantExtraData;
use Integracao\Stone\Credenciamento\Contracts\Request\AffiliateRequest;
use Integracao\Stone\Credenciamento\Contracts\Request\ListMerchantRequest;
use Integracao\Stone\Credenciamento\Contracts\Request\ListTerminalDevicesRequest;
use Tests\Integracao\Stone\PHPUnit;

/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 09/08/17
 * Time: 14:06
 */
class MerchantApiTest extends PHPUnit
{
    
    /**
     * @var MerchantApi
     */
    private $merchantAPI;

    /**
     * MerchantApiTest constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->merchantAPI = new MerchantApi();
    }

    public function test_affiliate()
    {

        $response = $this->merchantAPI->affiliate(
            (new AffiliateRequest())
                ->setMerchant(
                    (new Merchant())
                        ->setDocumentType(DocumentTypeConst::CNPJ)
                        ->setDocumentNumber("97268631000128")
                        ->setCompanyName("EVOLVED LTDA - ME")
                        ->setTradeName(substr("EVOLVED LTDA", 0, 22))
                        ->setBankAccountList([
                            (new BankAccount())
                                ->setAccountNumber("000007")
                                ->setAccountVerificationCode("1")
                                ->setBankBranchCode("9999")
                                ->setBranchVerificationCode("1")
                                ->setBankIdentifier("001")
                                ->setBranchVerificationCode("2")
                                ->setCardBrand(CardBrandConst::ALL)
                                ->setBankAccountTypeId(BankAccountTypeConst::CONTA_CORRENTE)
                        ])
                        ->setEstimatedMonthlyTpv(99999.999)
                        ->setMcc("742")
                        ->setMerchantContactList([
                            (new MerchantContact())
                                ->setContactName("Adriano")
                                ->setEmail("adrianolaselva@gmail.com")
                                ->setMobilePhoneNumber("11986066232")
                                ->setPhoneNumber("11986066232")
                        ])
                        ->setMerchantCaptureMethodList([
                            (new MerchantCaptureMethod())
                                ->setTerminalTypeId(TerminalTypeConst::TEF)
                        ])
                        ->setMerchantAddress(
                            (new MerchantAddress())
                                ->setCity("Assis")
                                ->setComplement("casa")
                                ->setCountry(CountryConst::BRASIL)
                                ->setNeighborhood("Vila Adileta")
                                ->setPostalCode("19814411")
                                ->setStateCode("SP")
                                ->setStreetName("Rua Fernão dias")
                                ->setStreetNumber("100")
                        )
                        ->setMerchantExtraDataList([
                            (new MerchantExtraData())
                                ->setKey("ID_Pessoa")
                                ->setValue("174"),
                            (new MerchantExtraData())
                                ->setKey("ID_Afiliacao")
                                ->setValue("9999")
                        ])
                )
        );

        $this->assertNotNull($response['Status']['Code']);
        $this->assertNotNull($response['Status']['Message']);
        $this->assertNotNull($response['Status']['MessageRefCode']);

        if($response['Status']['Code'] == 'VALIDATION_ERRORS'){
            $this->assertTrue(isset($response['MessageList']));
            $this->assertTrue(isset($response['MerchantReturn']));
            return;
        }

        $this->assertTrue(isset($response['MerchantReturn']));
        $this->assertNotNull($response['MerchantReturn']['AffiliationKey']);
        $this->assertNotNull($response['MerchantReturn']['CaptureMethodList']);
        $this->assertNotNull($response['MerchantReturn']['Mcc']);
        $this->assertNotNull($response['MerchantReturn']['MdrInfoList']);
        $this->assertNotNull($response['MerchantReturn']['CaptureMethodList'][0]['SaleAffiliationKey']);
        $this->assertEquals(TerminalTypeConst::TEF, $response['MerchantReturn']['CaptureMethodList'][0]['TerminalTypeId']);

    }

    public function test_listMerchants()
    {
        $response = $this->merchantAPI->listMerchants(
            (new ListMerchantRequest())
                ->setPageNumber(1)
                ->setRowsPerPage(1)
        );

        $this->assertNotNull($response['Status']['Code']);
        $this->assertNotNull($response['Status']['Message']);
        $this->assertNotNull($response['Status']['MessageRefCode']);

        if($response['Status']['Code'] == StoneResponseCode::VALIDATION_ERRORS){
            $this->assertTrue(isset($response['MessageList']));
            $this->assertTrue(isset($response['MerchantReturn']));
            return;
        }

        $this->assertTrue(isset($response['ListedMerchants']));

    }

    public function test_listTerminalDevices()
    {
        $response = $this->merchantAPI->listTerminalDevices(
            (new ListTerminalDevicesRequest())
                ->setPageNumber(1)
                ->setRowsPerPage(1)
        );

        $this->assertNotNull($response['Status']['Code']);
        $this->assertNotNull($response['Status']['Message']);
        $this->assertNotNull($response['Status']['MessageRefCode']);

        if($response['Status']['Code'] == StoneResponseCode::VALIDATION_ERRORS){
            $this->assertTrue(isset($response['MessageList']));
            $this->assertTrue(isset($response['MerchantReturn']));
            return;
        }

        $this->assertTrue(isset($response['TerminalDeviceList']));

    }

}
