<?php

namespace App\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Doctrine\Common\Collections\ArrayCollection;

class User implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract {

    use Authenticatable,
        Authorizable,
        CanResetPassword;

    protected $id;
    protected $name;
    protected $email;
    protected $password;
    protected $remember_token;
    protected $created_at;
    protected $updated_at;
    protected $posts;

    public function __construct() {
        $this->posts = new ArrayCollection;
    }

    public function getAuthIdentifierName() {
        return 'id';
    }
    
    public function getKey() {
        return $this->id;
    }
    
    public function sendPasswordResetNotification($token) {
        
    }

    function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getRemember_token() {
        return $this->remember_token;
    }

    function getCreated_at() {
        return $this->created_at;
    }

    function getUpdated_at() {
        return $this->updated_at;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRemember_token($remember_token) {
        $this->remember_token = $remember_token;
    }

    function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }

    function setUpdated_at($updated_at) {
        $this->updated_at = $updated_at;
    }

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }


}
