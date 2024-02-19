<?php 
class UsersController extends Users {
    public function createUser($first_name, $last_name, $dob) {
        $result = $this->setUser ($first_name, $last_name, $dob);
    }
};