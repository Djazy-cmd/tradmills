<?php

class Auth{

    private $db;

    public function __construct($db){

            $this->db = $db;

    }

    
    public function register($fullname, $username, $password, $email){

        $password = password_hash($password,PASSWORD_BCRYPT);

       $token = Str::random(30);

        $this->db->query("INSERT INTO users  (fullname, username, password, email, confirm_token) VALUES(?,?,?,?,?)",[
            $fullname,
            $username,
            $password,
            $email,
            $token
            ]);
            $user_id = $db->lastInsertId();
            mail()
    }
}