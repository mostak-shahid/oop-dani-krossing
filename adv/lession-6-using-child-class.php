<?php

class Mobile
{
    public $mobileType;
    public $phoneName;
    public $batteryCapacitype;

    public function mobileType($mobileType)
    {
        $this->mobileType = $mobileType;
        return $this;
    }
}

class samsungGalaxy extends Mobile
{
    public function smartPhoneName()
    {
        $this->phoneName = __CLASS__;
        return $this;
    }
    public function battery($batteryCapacity)
    {
        $this->batteryCapacity = $batteryCapacity;
        return $this;
    }

    public function getMobileInfo()
    {
        return $this->phoneName . " is a " . $this->mobileType . " mobile having battery capacity of " . $this->batteryCapacity;
    }
}

$obj = new samsungGalaxy();
echo $obj->smartPhoneName()
    ->mobileType('android')
    ->battery('2000mh')
    ->getMobileInfo();