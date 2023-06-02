<?php

require_once 'models/User.php';

// Вспомогательный класс для хранения списка пользователей
class UserList
{
    private array $users = [];

    public function addUsers(User $user): void
    {
        $this->users[] = $user;
    }

    public function removeUser(User $user): void
    {
        foreach ($this->users as $key => $value) {
            if ($value === $user) {
                unset($this->users[$key]);
            }
        }
    }
}