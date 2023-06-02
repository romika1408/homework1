<?php

require_once 'models/User.php';
require_once 'classes/UserList.php';
require_once 'view/UserView.php';

class UserController
{
    private UserList $userList;
    private UserView $userView;

    public function __construct(UserList $userList, UserView $userView)
    {
        $this->userList = $userList;
        $this->userView = $userView;
    }

    public function addUser(User $user): void
    {
        $this->userList->addUser($user);
    }

    public function removeUser(User $user): void
    {
        $this->userList->removeUser($user);
    }
    public function renderUserList(User $user): void
    {
        $this->userView->render();
    }
}