<?php

final class Users extends Database{
    use DataTraits;
    public function __construct(){
        parent::__construct();
        $this->table = "users";
    }
    public function getUserByEmail($email){
        $param = array(
            //'fields' => "id, fname, email, pass"
            //'where' => 'email = "'.$email.'"'
            'where' => array(
                'email' => $email,
                'status' => 'active'
            )
        );
        return $this->select($param);
    }
    public function getUserByToken($cookie_token){
        $param = array(
            'where' => array(
                'remember_us' => $cookie_token,
                'status' => 'active'
            )
        );
        return $this->select($param);
    }

    public function selectAllUser(){
        $param = array(
            'where' => "id !=".$_SESSION['id']
        );
        return $this->select($param);
    }
}