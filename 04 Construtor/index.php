<?php

class Login
{
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password)
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setPassword($password);
    }

    // Set methods
    public function setName($name)
    {
        $this->name = $name;
    }

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
    public function getName()
    {
        return $this->name;
    }

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

$login = new Login('lucas', 'email@email.com', 'pass');

echo '<p>'. $login->makeLogin() .'</p>';

echo '<pre>';
var_dump($login);
echo '</pre>';
