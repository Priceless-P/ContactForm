<?php

require_once 'Methods.php';

class HandleSubmit
{
    private $method;

    public function __construct()
    {
        $this->method = new Methods();

        session_start();
    }

    public function add($name, $email, $subject, $message): string
    {

        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            $_SESSION['message'] = "All field should be filled";
            return $_SESSION['message'];
        } else {
            if ($this->method->insert($name, $email, $subject, $message)) {
                $_SESSION['message'] = "Your message has been sent successfully";
            } else {
                $_SESSION['message'] = "Please try again. An error occurred.";
            }
            return $_SESSION['message'];
        }
    }

    public function getAll()
    {
        return $this->method->retrieve();
    }
}
