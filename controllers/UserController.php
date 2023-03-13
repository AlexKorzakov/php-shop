<?php


class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';

        $result = false;


        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2 символов.';
            }

            if(!User::checkEmail($email)) {
                $errors[] = 'Неправильный Email.';
            }

            if(!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов.';
            }
            if(User::checkEmailExsists($email)) {
                $errors[] = 'Такой Email уже используется.';
            }
            if ($errors == false) {
                $result = User::register($name, $email, $password);
            }
        }


        require_once(ROOT . '/views/user/register.php');

        return true;
    }

    public function actionLogin()
    {
        $email = '';
        $password = '';


        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkEmail($email)) {
                $errors[] = 'Неправильный Email.';
            }

            if(!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов.';
            }

            $userId = User::checkUserData($email, $password);

            if ($userId == false){
                $errors[] = 'Неправильные данные для входа на сайт';
            } else{
                User::auth($userId);
                header("Location: /cabinet/");
            }
        }
        require_once(ROOT . '/views/user/login.php');

        return true;
    }

    public function actionLogout()
    {
        unset($_SESSION["user"]);
        header("Location: /");
    }

    public function actionNewcompany()
    {
        $userId = User::checkLogged();
        $user = User::getUserById($userId);
        $latestCompany = array();
        $latestCompany = User::getLatestCompany($userId);

        $name = '';
        $psnr = '';
        $tin = '';
        $cor = '';
        $che_a = '';
        $cor_a = '';
        $bic = '';
        $bank = '';
        $legal_adrs = '';
        $actual_adrs = '';
        $email = '';
        $general_director = '';

        $result = false;


        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $psnr = $_POST['psnr'];
            $tin = $_POST['tin'];
            $cor = $_POST['cor'];
            $che_a = $_POST['che_a'];
            $cor_a = $_POST['cor_a'];
            $bic = $_POST['bic'];
            $bank = $_POST['bank'];
            $legal_adrs = $_POST['legal_adrs'];
            $actual_adrs = $_POST['actual_adrs'];
            $email = $_POST['email'];
            $general_director = $_POST['general_director'];

            $errors = false;

            if(!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2 символов.';
            }

            if(!User::checkEmail($email)) {
                $errors[] = 'Неправильный Email.';
            }

            if ($errors == false) {
                $result = User::companyRegister($name, $psnr, $tin, $cor, $che_a, $cor_a, $bic, $bank, $legal_adrs, $actual_adrs, $email, $general_director, $userId);
            }
        }
        require_once(ROOT . '/views/cabinet/register.php');

        return true;

    }

    public function actionOrder($id)
    {
        
        // Получаем данные о конкретном заказе
        $order = Order::getOrderById($id);

        // Получаем массив с идентификаторами и количеством товаров
        $productsQuantity = json_decode($order['products'], true);

        // Получаем массив с индентификаторами товаров
        $productsIds = array_keys($productsQuantity);

        // Получаем список товаров в заказе
        $products = Product::getProductsByIds($productsIds);

        // Подключаем вид
        require_once(ROOT . '/views/cabinet/view.php');
        return true;
    }

    public function actionTestAjax(){
        $a = $_REQUEST['company'];
        $q = 'kapusa';

        $ex = array();
        $ex = User::testCheck($a);
        require_once(ROOT . '/views/cabinet/test.php');
        return true;
    }

    public function actionShowSecondTableAjax()
    {
       if (isset($_POST['txt'])){
        $txt = $_POST['txt'];
        echo $txt;
       }
        // $q = 'kapusa';

        // $ex = array();
        // $ex = User::testCheck($a);

        // require_once(ROOT.'/views/cabinet/test2.php');
        return true;
    }
}



?>