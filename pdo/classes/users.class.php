<?php
class Users extends Dbh {

    protected function getUser ($id) {
        $sql = 'SELECT * FROM wp_tests WHERE ID=?';
        $result = $this->connect()->prepare($sql);
        $result->execute([$id]);
        return $result->fetch(); //for 1 result from mysql
    }
    protected function getUsers () {
        $sql = 'SELECT * FROM wp_tests';
        $result = $this->connect()->prepare($sql);
        $result->execute();
        return $result->fetchAll(); //for get all results from mysql
        
    }
    protected function setUser ($first_name, $last_name, $dob) {
        $sql = 'INSERT INTO wp_tests (first_name, last_name, dob) VALUES (?,?,?)';
        $result = $this->connect()->prepare($sql);
        $result->execute([$first_name,$last_name, $dob]);
    }
};