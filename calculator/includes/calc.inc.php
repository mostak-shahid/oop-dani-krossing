<?php
declare(strict_types=1);
include_once 'class-autoload.inc.php';
// include_once '../classes/calc.class.php';
$oper = $_POST['oper'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$calc = new Calc($oper, (int)$num1, (int)$num2);
try {
    echo $calc->calculator();
} catch (TypeError $th) {
    echo "Error!: " . $th->getMessage();
}