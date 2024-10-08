<?php

class Newsletter
{
    public function registerEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new Exception("invalid email", 1);
        }
        else
        {
            echo 'ok';
        }
    }
}

$newsletter = new Newsletter;

try {
    $newsletter->registerEmail('email@');
}
catch (Exception $e) {
    echo "Message: ". $e->getMessage() . "\n";
    echo "Code: ". $e->getCode() . "\n";
    echo "Line: ". $e->getLine() . "\n";
    echo "File: ". $e->getFile() . "\n";
}
