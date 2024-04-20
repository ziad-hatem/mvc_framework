<?php

namespace MVC\models;

use MVC\core\model;

class user extends model
{
    public static function getAllUsers()
    {
        return model::db()->row("SELECT * FROM users");
    }

    public static function Login($email, $password)
    {
        return model::db()->row("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    }

    public static function signUp($name, $email, $password)
    {
        return model::db()->insert("users", [
            "name" => $name,
            "email" => $email,
            "password" => $password,
        ]);
    }
}
