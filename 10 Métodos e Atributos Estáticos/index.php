<?php

function show($line) {
    echo "<p>".$line."</p>";
}

class Login
{
    public static $user;

    public static function verifyLogin()
    {
        $message = self::$user . ' is logged.';
        return $message;
    }

    public function logout()
    {
        return 'logout';
    }
}

Login::$user = "rasmus lerdorf";

show(Login::$user);
show(Login::verifyLogin());

$login = new Login;
show($login->logout());
