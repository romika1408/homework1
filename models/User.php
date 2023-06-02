<?php

class User
{
    private string $name;
    private string $surname;
    private string $email;

    public function __construct($name, $surname, $email)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;        
    }

    public function getName(): string
    {
         return $this->name;
    }

    public function getSurname(): string
    {
         return $this->surname;
    }

    public function getEmail(): string
    {
         return $this->email;
    }
}