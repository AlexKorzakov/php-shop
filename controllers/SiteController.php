<?php

include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';

class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        //  get lates products

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts();

        require_once(ROOT.'/views/site/index.php');

        return true;
    }
    
    public function actionAbout()
    {
        require_once(ROOT.'/views/site/about.php');
        return true;
    }

    public function actionPayment()
    {
        require_once(ROOT.'/views/site/payment.php');
        return true;
    }

    public function actionDelivery()
    {
        require_once(ROOT.'/views/site/delivery.php');
        return true;
    }

    public function actionReturn()
    {
        require_once(ROOT.'/views/site/return.php');
        return true;
    }

    public function actionReturnNoQuality()
    {
        require_once(ROOT.'/views/site/return_no_quality.php');
        return true;
    }

    public function actionReturnQuality()
    {
        require_once(ROOT.'/views/site/return_quality.php');
        return true;
    }

    public function actionContact(){

        $userEmail = '';
        $userText = '';
        $result = false;

        if(isset($_POST['submit'])){
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

            $errors = false;

            //validation of inputs
            if (!User::checkEmail($userEmail)){
                $errors[] = 'Неправильный Email';
            }
            if($errors == false){
                $adminEmail = 'stroyfishka@bk.ru';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема письма';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }

        require_once(ROOT.'/views/site/contacts2.php');

        return true;


        
        // $mail = 'stroyfishka@bk.ru';
        // $subject = 'Не для бродяг';
        // $message = 'Содержание письма Варькин Рот';
        // $result = mail($mail, $subject, $message);

        // var_dump($result);

        // die;
    }
    public function actionError()
    {
        require_once(ROOT.'/views/site/err404.php');
        return true;
    }
}
?>