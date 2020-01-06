<?php
class Account
{
    public function __construct()
    {
        $this->errorArray = array();
    }

    public function register($username, $firstName, $lastName, $email, $confirmEmail, $password, $confirmPassword)
    {
        $this->validateUsername($username);
        $this->validateFirstName($firstName);
        $this->validateLastName($lastName);
        $this->validateEmails($email, $confirmEmail);
        $this->validatePasswords($password, $confirmPassword);
    }

    private function validateUsername($username)
    {
        if (strlen($username) > 25 || strlen($username) < 5) {
            array_push($this->errorArray, "Your username must be between 5 and 25 characters");
            return;
        }
        // TODO: check if username exists
    }

    private function validateFirstName($firstName)
    {
    }

    private function validateLastName($lastName)
    {
    }

    private function validateEmails($email, $confirmEmail)
    {
    }

    private function validatePasswords($password, $confirmPassword)
    {
    }
}
