<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->click('#yucs-mail_link_id');
$I->fillField('#login-username', 't_alex02@yahoo.com');
$I->waitForElement(30);
