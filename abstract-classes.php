<?php
abstract class Visa {
    public function visaPayment () {
        return "perform a Visa transaction";
    }
    abstract public function getPayment();
}
class BuyProduct extends Visa {
    public function getPayment() {
        return $this->visaPayment();
    }
}

$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();