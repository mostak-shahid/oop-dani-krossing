<?php
class Test extends Dbh {
    public function getUsers () {
        $sql = 'SELECT * FROM wp_tests';
        $result = $this->connect()->query($sql);
        while ($row = $result->fetch()){
            echo $row['first_name'] . '<br/>';
        }
    }
    public function getUsersStmt ($first_name, $last_name) {
        $sql = 'SELECT * FROM wp_tests WHERE first_name=? AND last_name=?';
        $result = $this->connect()->prepare($sql);
        $result->execute([$first_name,$last_name]);
        //$name = $result->fetch(); //for get 1 result from mysql
        $names = $result->fetchAll(); //for get all results from mysql
        foreach ($names as $name) {
            echo $name['first_name']. '<br/>';
        }
    }
    public function setUsersStmt ($first_name, $last_name, $dob) {
        $sql = 'INSERT INTO wp_tests (first_name, last_name, dob) VALUES (?,?,?)';
        $result = $this->connect()->prepare($sql);
        $result->execute([$first_name,$last_name, $dob]);
    }
}