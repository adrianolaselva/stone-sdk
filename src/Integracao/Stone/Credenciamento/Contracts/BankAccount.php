<?php

namespace Integracao\Stone\Credenciamento\Contracts;


class BankAccount implements \JsonSerializable
{
    /**
     * @var string
     */
    private $accountNumber;

    /**
     * @var string
     */
    private $accountVerificationCode;

    /**
     * @var string
     */
    private $bankBranchCode;

    /**
     * @var string
     */
    private $bankIdentifier;

    /**
     * @var string
     */
    private $branchVerificationCode;

    /**
     * @var string
     */
    private $cardBrand;

    /**
     * @var string
     */
    private $bankAccountTypeId;

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return BankAccount
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountVerificationCode()
    {
        return $this->accountVerificationCode;
    }

    /**
     * @param string $accountVerificationCode
     * @return BankAccount
     */
    public function setAccountVerificationCode($accountVerificationCode)
    {
        $this->accountVerificationCode = $accountVerificationCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankBranchCode()
    {
        return $this->bankBranchCode;
    }

    /**
     * @param string $bankBranchCode
     * @return BankAccount
     */
    public function setBankBranchCode($bankBranchCode)
    {
        $this->bankBranchCode = $bankBranchCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankIdentifier()
    {
        return $this->bankIdentifier;
    }

    /**
     * @param string $bankIdentifier
     * @return BankAccount
     */
    public function setBankIdentifier($bankIdentifier)
    {
        $this->bankIdentifier = $bankIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getBranchVerificationCode()
    {
        return $this->branchVerificationCode;
    }

    /**
     * @param string $branchVerificationCode
     * @return BankAccount
     */
    public function setBranchVerificationCode($branchVerificationCode)
    {
        $this->branchVerificationCode = $branchVerificationCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardBrand()
    {
        return $this->cardBrand;
    }

    /**
     * @param string $cardBrand
     * @return BankAccount
     */
    public function setCardBrand($cardBrand)
    {
        $this->cardBrand = $cardBrand;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankAccountTypeId()
    {
        return $this->bankAccountTypeId;
    }

    /**
     * @param string $bankAccountTypeId
     * @return BankAccount
     */
    public function setBankAccountTypeId($bankAccountTypeId)
    {
        $this->bankAccountTypeId = $bankAccountTypeId;
        return $this;
    }

    public function jsonSerialize()
    {
        return [
            'AccountNumber' => $this->accountNumber,
            'AccountVerificationCode' => $this->accountVerificationCode,
            'BankBranchCode' => $this->bankBranchCode,
            'BankIdentifier' => $this->bankIdentifier,
            'BranchVerificationCode' => $this->branchVerificationCode,
            'CardBrand' => $this->cardBrand,
            'BankAccountTypeId' => $this->bankAccountTypeId
        ];
    }

}