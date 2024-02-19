<?php
class UsersView extends Users {
    public function showUser($id){
        $result = $this->getUser ($id);
        echo "Full Name: "  . $result['first_name'] . " " . $result['last_name'];
    }
    public function showUsers(){
        $results = $this->getUsers ();
        foreach ($results as $result) {
            echo "Full Name: "  . $result['first_name'] . " " . $result['last_name'] ."<br/>";
        }
    }
};