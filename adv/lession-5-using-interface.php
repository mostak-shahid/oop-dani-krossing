<?php

interface MyInterface
{
    public function methodA($methodA);
    public function methodB($methodB);
}

abstract class MyClassName implements MyInterface
{
    public  function methodA($methodA)
    {
        $this->methodAproperty = $methodA;
        return $this;
    }

    public abstract function methodB($methodB);
}

class MyChildClassName extends MyClassName
{
    public $methodAproperty, $methodBproperty;

    public  function methodB($methodB)
    {
        $this->methodBproperty = $methodB;
        return $this;
    }

    public function getAllMethodsInfo() 
    {
        return "Interface methods are " . $this->methodAproperty . " & " . $this->methodBproperty;
    }
}

$obj = new MyChildClassName;
echo $obj->methodA('method A')
         ->methodB('method B')
         ->getAllMethodsInfo();