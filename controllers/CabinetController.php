<?php

class CabinetController
{
    public function actionIndex()
    {
        // get id user from session
        $userId = User::checkLogged();

        // echo $userId;

        $user = User::getUserById($userId);

        // $lastCompany = array();
        // $lastCompany = User::getCompanyListByUser($userId);

        require_once(ROOT.'/views/cabinet/index.php');

        return true;
    }

    public function actionCompany()
    {
        $userId = User::checkLogged();
        $user = User::getUserById($userId);
        $lastCompany = array();
        $lastCompany = User::getCompanyListByUser($userId);

        require_once(ROOT.'/views/cabinet/company.php');

        return true;
    }

    public function actionRegister()
    {
        $userId = User::checkLogged();
        // $user = User::getUserById($userId);

        require_once(ROOT . '/views/cabinet/register.php');

        return true;
    }

    public function actionOrder()
    {
        $userId = User::checkLogged();
        $user = User::getUserById($userId);
        $lastCompany = array();
        $lastCompany = User::getCompanyListByUser($userId);

        

        // require_once(ROOT.'/views/cabinet/test2.php');

        //order2.php
        $result = false;
        if(isset($_POST['submit'])) {
            $a = $_POST['company'];
            $result = User::testCheck($a);
            $q = 0;
        }
        require_once(ROOT.'/views/cabinet/order2.php');

        return true;
    }


    public function actionShow()
    {
        $result = false;
        if(isset($_POST['submit'])) {
            $a = $_POST['company'];
            $result = User::testCheck($a);
        }
        require_once(ROOT.'/views/cabinet/order2.php');

        return true;
    }

}



?>