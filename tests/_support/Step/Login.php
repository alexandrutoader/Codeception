<?php
/**
 * Created by PhpStorm.
 * User: alexandru.toader
 * Date: 2/7/2018
 * Time: 3:33 PM
 */

namespace Step;


class Login extends \AcceptanceTester
{
    public function Login($username, $password){
        $I =$this;
        $I->wantTo('perform actions and see result');
        $I->amOnPage('/');
        $I->waitForElement('#mega-bottombar-mail', 30);
        $I->click('#mega-bottombar-mail');
        $I->fillField('#login-username', $username);
        $I->click('#login-signin');
        $I->waitForElement('#login-passwd', 30);
        $I->fillField('#login-passwd', $password);
    }
}

