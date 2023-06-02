<?php

require_once 'models/User.php';
require_once 'classes/UserList.php';
require_once 'view/UserView.php';
require_once 'controller/UserController.php';


$userList = new UserList();
$userView = new UserView($userList);
$userConroller = new UserController($userList, $userView);

$userConroller->addUser(new User(1, 'Roma', 'Eremenko', 'er$example.com'));
$userConroller->addUser(new User(1, 'Liza', 'Koltsova', 'lk$example.com'));


// Отобразим список пользователей
$userConroller->renderUserList();