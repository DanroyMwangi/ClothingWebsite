<?php
namespace App\Libraries;

class Hash{

    public static function make($password){
        return password_hash($password,PASSWORD_BCRYPT);
    }
    public static function check($hashPassword,$password){
        if(password_verify($password,$hashPassword)){
            return true;
        }
        else{
            return false;
        }
    }
}





?>