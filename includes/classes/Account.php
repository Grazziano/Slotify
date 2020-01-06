<?php
class Account
{
    public function __construct()
    {
    }

    public function register()
    {
        $this->validateUsername($username);
        $this->validateFirstName($firstName);
        $this->validateLastName($lastName);
        $this->validateEmails($email, $confirmEmail);
        $this->validatePasswords($password, $confirmPassword);
    }

    private function validateUsername($username)
    {
        echo "Username";
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
