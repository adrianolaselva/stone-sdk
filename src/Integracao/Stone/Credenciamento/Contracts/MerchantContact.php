<?php

namespace Integracao\Stone\Credenciamento\Contracts;

/**
 * Class MerchantContact
 * @package Integracao\Stone\Credenciamento\Contracts
 */
class MerchantContact implements \JsonSerializable
{
    /**
     * @var string
     */
    private $contactName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $mobilePhoneNumber;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * @param string $contactName
     * @return MerchantContact
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return MerchantContact
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber;
    }

    /**
     * @param string $mobilePhoneNumber
     * @return MerchantContact
     */
    public function setMobilePhoneNumber($mobilePhoneNumber)
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return MerchantContact
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    function jsonSerialize()
    {
        return [
            'ContactName' => $this->phoneNumber,
            'Email' => $this->email,
            'MobilePhoneNumber' => $this->mobilePhoneNumber,
            'PhoneNumber' => $this->phoneNumber,
        ];
    }

}