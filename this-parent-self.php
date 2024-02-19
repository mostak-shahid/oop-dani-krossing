<?php
class FirstClass {
    const EXAMPLE = "You can't change this";
    public static function test () {
        $testing = "This is a test!" . self::EXAMPLE;
        return $testing;
    } 
}
$a = new FirstClass();
echo $a->test() . '<br/>';
$b = FirstClass::test();
echo $b . '<br/>';

class SecondClass extends FirstClass {
    public static $staticProperty = "A static property!";
    public static function anotherTest () {
        $return = parent::EXAMPLE . '<br/>';
        $return .= self::$staticProperty;

        return $return;
    }
}
$c = SecondClass::anotherTest();
echo $c. '<br/>';