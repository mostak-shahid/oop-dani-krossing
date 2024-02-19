<?php
class studentDetails {
 private $id = 0;
 public $name = '';
 public $address ='';
 public function setStudentId($id) {
  $this->id = $id;
 }
 public function setStudentName($name) {
  $this->name = $name;
 }
 public function setStudentAddress($address) {
  $this->address = $address;
 }
public function getStudentInfo() {
  return 'student '. $this->name. ' of id '.$this->id. ' stays at '. $this->address;
 }
}
$obj = new studentDetails();
$obj->setStudentId(1423);
$obj->setStudentName('John');
$obj->setStudentAddress('LA');
print_r($obj->getStudentInfo());