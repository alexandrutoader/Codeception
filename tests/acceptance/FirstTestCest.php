<?php

use Search\User;
use Step\Login;

class FirstTestCest
{
    public function Login(Login $I)
    {
        $username = User::getByRole('admin')['username'];
        $password = User::getByRole('admin')['password'];
        $I->Login($username, $password);
    }
}
