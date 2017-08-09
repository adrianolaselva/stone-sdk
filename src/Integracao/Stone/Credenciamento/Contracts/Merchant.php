<?php

namespace Integracao\Stone\Credenciamento\Contracts;


/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 09/08/17
 * Time: 13:14
 */
class Merchant implements \JsonSerializable
{

    /**
     * @var Credential
     */
    private $credential;

    /**
     * @var array
     */
    private $bankAccountList;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $tradeName;

    /**
     * @var string
     */
    private $documentNumber;

    /**
     * @var integer
     */
    private $documentType;

    /**
     * @var float
     */
    private $estimatedMonthlyTpv;

    /**
     * @var string
     */
    private $mcc;

    /**
     * @var MdrNegotiation
     */
    private $mdrNegotiationList;

    /**
     * @var MerchantAddress
     */
    private $merchantAddress;

    /**
     * @var array
     */
    private $merchantCaptureMethodList;

    /**
     * @var array
     */
    private $merchantContactList;

    /**
     * @var array
     */
    private $merchantExtraDataList;

    /**
     * @var integer
     */
    private $salesChannelId;

    /**
     * @var integer
     */
    private $salesPartnerId;

    /**
     * @var integer
     */
    private $salesTeamMemberId;

    /**
     * @var array
     */
    private $merchantWorkScheduleList;

    /**
     * @var array
     */
    private $chainTypeIdList;

    /**
     * @var array
     */
    private $parentChainList;

    /**
     * @var PrepaymentConfiguration
     */
    private $prepaymentConfiguration;

    /**
     * @var string
     */
    private $accountEmail;

    /**
     * @var MerchantExtraData
     */
    private $merchantExtraData;

    /**
     * @return array
     */
    public function getBankAccountList()
    {
        return $this->bankAccountList;
    }

    /**
     * @param array $bankAccountList
     * @return Merchant
     */
    public function setBankAccountList($bankAccountList)
    {
        $this->bankAccountList = $bankAccountList;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return Merchant
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTradeName()
    {
        return $this->tradeName;
    }

    /**
     * Tratamento para que não exceda os 22 caracteres permitidos pela API
     *
     * @param string $tradeName
     * @return Merchant
     */
    public function setTradeName($tradeName)
    {
        $this->tradeName = substr($tradeName, 0, 22);
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * @param string $documentNumber
     * @return Merchant
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @param int $documentType
     * @return Merchant
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedMonthlyTpv()
    {
        return $this->estimatedMonthlyTpv;
    }

    /**
     * @param float $estimatedMonthlyTpv
     * @return Merchant
     */
    public function setEstimatedMonthlyTpv($estimatedMonthlyTpv)
    {
        $this->estimatedMonthlyTpv = $estimatedMonthlyTpv;
        return $this;
    }

    /**
     * @return string
     */
    public function getMcc()
    {
        return $this->mcc;
    }

    /**
     * @param string $mcc
     * @return Merchant
     */
    public function setMcc($mcc)
    {
        $this->mcc = $mcc;
        return $this;
    }

    /**
     * @return MdrNegotiation
     */
    public function getMdrNegotiationList()
    {
        return $this->mdrNegotiationList;
    }

    /**
     * @param MdrNegotiation $mdrNegotiationList
     * @return Merchant
     */
    public function setMdrNegotiationList($mdrNegotiationList)
    {
        $this->mdrNegotiationList = $mdrNegotiationList;
        return $this;
    }

    /**
     * @return MerchantAddress
     */
    public function getMerchantAddress()
    {
        return $this->merchantAddress;
    }

    /**
     * @param MerchantAddress $merchantAddress
     * @return Merchant
     */
    public function setMerchantAddress($merchantAddress)
    {
        $this->merchantAddress = $merchantAddress;
        return $this;
    }

    /**
     * @return array
     */
    public function getMerchantCaptureMethodList()
    {
        return $this->merchantCaptureMethodList;
    }

    /**
     * @param array $merchantCaptureMethodList
     * @return Merchant
     */
    public function setMerchantCaptureMethodList($merchantCaptureMethodList)
    {
        $this->merchantCaptureMethodList = $merchantCaptureMethodList;
        return $this;
    }

    /**
     * @return array
     */
    public function getMerchantContactList()
    {
        return $this->merchantContactList;
    }

    /**
     * @param array $merchantContactList
     * @return Merchant
     */
    public function setMerchantContactList($merchantContactList)
    {
        $this->merchantContactList = $merchantContactList;
        return $this;
    }

    /**
     * @return array
     */
    public function getMerchantExtraDataList()
    {
        return $this->merchantExtraDataList;
    }

    /**
     * @param array $merchantExtraDataList
     * @return Merchant
     */
    public function setMerchantExtraDataList($merchantExtraDataList)
    {
        $this->merchantExtraDataList = $merchantExtraDataList;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalesChannelId()
    {
        return $this->salesChannelId;
    }

    /**
     * @param int $salesChannelId
     * @return Merchant
     */
    public function setSalesChannelId($salesChannelId)
    {
        $this->salesChannelId = $salesChannelId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalesPartnerId()
    {
        return $this->salesPartnerId;
    }

    /**
     * @param int $salesPartnerId
     * @return Merchant
     */
    public function setSalesPartnerId($salesPartnerId)
    {
        $this->salesPartnerId = $salesPartnerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalesTeamMemberId()
    {
        return $this->salesTeamMemberId;
    }

    /**
     * @param int $salesTeamMemberId
     * @return Merchant
     */
    public function setSalesTeamMemberId($salesTeamMemberId)
    {
        $this->salesTeamMemberId = $salesTeamMemberId;
        return $this;
    }

    /**
     * @return array
     */
    public function getMerchantWorkScheduleList()
    {
        return $this->merchantWorkScheduleList;
    }

    /**
     * @param array $merchantWorkScheduleList
     * @return Merchant
     */
    public function setMerchantWorkScheduleList($merchantWorkScheduleList)
    {
        $this->merchantWorkScheduleList = $merchantWorkScheduleList;
        return $this;
    }

    /**
     * @return array
     */
    public function getChainTypeIdList()
    {
        return $this->chainTypeIdList;
    }

    /**
     * @param array $chainTypeIdList
     * @return Merchant
     */
    public function setChainTypeIdList($chainTypeIdList)
    {
        $this->chainTypeIdList = $chainTypeIdList;
        return $this;
    }

    /**
     * @return array
     */
    public function getParentChainList()
    {
        return $this->parentChainList;
    }

    /**
     * @param array $parentChainList
     * @return Merchant
     */
    public function setParentChainList($parentChainList)
    {
        $this->parentChainList = $parentChainList;
        return $this;
    }

    /**
     * @return PrepaymentConfiguration
     */
    public function getPrepaymentConfiguration()
    {
        return $this->prepaymentConfiguration;
    }

    /**
     * @param PrepaymentConfiguration $prepaymentConfiguration
     * @return Merchant
     */
    public function setPrepaymentConfiguration($prepaymentConfiguration)
    {
        $this->prepaymentConfiguration = $prepaymentConfiguration;
        return $this;
    }

    /**
     * @return Credential
     */
    public function getCredential()
    {
        return $this->credential;
    }

    /**
     * @param Credential $credential
     * @return Merchant
     */
    public function setCredential($credential)
    {
        $this->credential = $credential;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountEmail()
    {
        return $this->accountEmail;
    }

    /**
     * @param string $accountEmail
     * @return Merchant
     */
    public function setAccountEmail($accountEmail)
    {
        $this->accountEmail = $accountEmail;
        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'CompanyName' => $this->companyName,
            'BankAccountList' => $this->bankAccountList,
            'TradeName' => $this->tradeName,
            'DocumentNumber' => $this->documentNumber,
            'DocumentType' => $this->documentType,
            'EstimatedMonthlyTpv' => $this->estimatedMonthlyTpv,
            'Mcc' => $this->mcc,
            'MdrNegotiationList' => $this->mdrNegotiationList,
            'MerchantAddress' => $this->merchantAddress,
            'MerchantCaptureMethodList' => $this->merchantCaptureMethodList,
            'MerchantContactList' => $this->merchantContactList,
            'MerchantExtraDataList' => $this->merchantExtraDataList,
            'SalesChannelId' => $this->salesChannelId,
            'SalesPartnerId' => $this->salesPartnerId,
            'SalesTeamMemberId' => $this->salesTeamMemberId,
            'MerchantWorkScheduleList' => $this->merchantWorkScheduleList,
            'ChainTypeIdList' => $this->chainTypeIdList,
            'ParentChainList' => $this->parentChainList,
            'PrepaymentConfiguration' => $this->prepaymentConfiguration,
            'AccountEmail' => $this->accountEmail
        ];
    }
}