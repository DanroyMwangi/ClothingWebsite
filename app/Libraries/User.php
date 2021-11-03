<?php
class User{
    private $name,$address,$email,$password,$gender,$role,$exists=true;

    public function __construct(string $name,string $address,string $email,string $password,string $gender, string $role)
    {
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
        $this->password = $password;
        $this->gender = $gender;
        $this->role = $role;
    }
    public function getName(){
        return $this->name;
    }
    public function getAddress(){
        return $this->address;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getGender(){
        return $this->gender;
    }
    public function getRole(){
        return $this->role;
    }
    public function exists(){
        return $this->exists;
    }
}

?>