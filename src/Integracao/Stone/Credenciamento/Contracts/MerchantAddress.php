<?php

namespace Integracao\Stone\Credenciamento\Contracts;

/**
 * Class MerchantAddress
 * @package Integracao\Stone\Credenciamento\Contracts
 */
class MerchantAddress implements \JsonSerializable
{
    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $complement;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $neighborhood;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $stateCode;

    /**
     * @var string
     */
    private $streetName;

    /**
     * @var string
     */
    private $streetNumber;

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return MerchantAddress
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * @param string $complement
     * @return MerchantAddress
     */
    public function setComplement($complement)
    {
        $this->complement = $complement;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return MerchantAddress
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * @param string $neighborhood
     * @return MerchantAddress
     */
    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = $neighborhood;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return MerchantAddress
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * @param string $stateCode
     * @return MerchantAddress
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     * @return MerchantAddress
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * @param string $streetNumber
     * @return MerchantAddress
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    function jsonSerialize()
    {
        return [
            'City' => $this->city,
            'Complement' => $this->complement,
            'Country' => $this->country,
            'Neighborhood' => $this->neighborhood,
            'PostalCode' => $this->postalCode,
            'StateCode' => $this->stateCode,
            'StreetName' => $this->streetName,
            'StreetNumber' => $this->streetNumber
        ];
    }

}