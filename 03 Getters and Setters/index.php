<?php

/*
class Login
{
    public $email;
    public $password;

    public function makeLogin()
    {
        if (
            $this->email == 'email@email.com' &&
            $this->password == 'pass'
        ) {
            return 'successful login';
        }

        return 'not successful login';
    }
}

$login = new Login;

$login->email = 'email@email.com';
$login->password = 'pass';

echo $login->makeLogin();
*/

class Login
{
    private $email;
    private $password;

    // Set methods
    public function setEmail($email)
    {
        $user_email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $user_email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    // end Set

    // Get methods
    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    // end Get

    public function makeLogin()
    {
        if (
            $this->email == 'email@email.com' &&
            $this->password == 'pass'
        ) {
            return 'successful login';
        }

        return 'not successful login';
    }
}

$login = new Login;

$login->setEmail('email@email.com');
$login->setPassword('pass');

echo '<p>'. $login->makeLogin() .'</p>';

echo '<p>'. $login->getEmail() .'</p>';
echo '<p>'. $login->getPassword() .'</p>';
