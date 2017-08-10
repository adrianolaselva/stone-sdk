<?php

namespace Integracao\Stone\Credenciamento\Contracts;

/**
 * Class MerchantWorkSchedule
 * @package Integracao\Stone\Credenciamento\Contracts
 */
class MerchantWorkSchedule implements \JsonSerializable
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $open24h;

    /**
     * @var string
     */
    private $openWeekday;

    /**
     * @var string
     */
    private $closeWeekday;

    /**
     * @var string
     */
    private $openSaturday;

    /**
     * @var string
     */
    private $closeSaturday;

    /**
     * @var string
     */
    private $openSunday;

    /**
     * @var string
     */
    private $closeSunday;

    /**
     * @var string
     */
    private $openHoliday;

    /**
     * @var string
     */
    private $closeHoliday;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return MerchantWorkSchedule
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOpen24h()
    {
        return $this->open24h;
    }

    /**
     * @param bool $open24h
     * @return MerchantWorkSchedule
     */
    public function setOpen24h($open24h)
    {
        $this->open24h = $open24h;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenWeekday()
    {
        return $this->openWeekday;
    }

    /**
     * @param string $openWeekday
     * @return MerchantWorkSchedule
     */
    public function setOpenWeekday($openWeekday)
    {
        $this->openWeekday = $openWeekday;
        return $this;
    }

    /**
     * @return string
     */
    public function getCloseWeekday()
    {
        return $this->closeWeekday;
    }

    /**
     * @param string $closeWeekday
     * @return MerchantWorkSchedule
     */
    public function setCloseWeekday($closeWeekday)
    {
        $this->closeWeekday = $closeWeekday;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenSaturday()
    {
        return $this->openSaturday;
    }

    /**
     * @param string $openSaturday
     * @return MerchantWorkSchedule
     */
    public function setOpenSaturday($openSaturday)
    {
        $this->openSaturday = $openSaturday;
        return $this;
    }

    /**
     * @return string
     */
    public function getCloseSaturday()
    {
        return $this->closeSaturday;
    }

    /**
     * @param string $closeSaturday
     * @return MerchantWorkSchedule
     */
    public function setCloseSaturday($closeSaturday)
    {
        $this->closeSaturday = $closeSaturday;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenSunday()
    {
        return $this->openSunday;
    }

    /**
     * @param string $openSunday
     * @return MerchantWorkSchedule
     */
    public function setOpenSunday($openSunday)
    {
        $this->openSunday = $openSunday;
        return $this;
    }

    /**
     * @return string
     */
    public function getCloseSunday()
    {
        return $this->closeSunday;
    }

    /**
     * @param string $closeSunday
     * @return MerchantWorkSchedule
     */
    public function setCloseSunday($closeSunday)
    {
        $this->closeSunday = $closeSunday;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenHoliday()
    {
        return $this->openHoliday;
    }

    /**
     * @param string $openHoliday
     * @return MerchantWorkSchedule
     */
    public function setOpenHoliday($openHoliday)
    {
        $this->openHoliday = $openHoliday;
        return $this;
    }

    /**
     * @return string
     */
    public function getCloseHoliday()
    {
        return $this->closeHoliday;
    }

    /**
     * @param string $closeHoliday
     * @return MerchantWorkSchedule
     */
    public function setCloseHoliday($closeHoliday)
    {
        $this->closeHoliday = $closeHoliday;
        return $this;
    }

    function jsonSerialize()
    {
        return [
            'Id' => $this->id,
            'Open24h' => $this->open24h,
            'OpenWeekday' => $this->openWeekday,
            'CloseWeekday' => $this->closeWeekday,
            'OpenSaturday' => $this->openSaturday,
            'CloseSaturday' => $this->closeSaturday,
            'OpenSunday' => $this->openSunday,
            'CloseSunday' => $this->closeSunday,
            'OpenHoliday' => $this->openHoliday,
            'CloseHoliday' => $this->closeHoliday,
        ];
    }

}