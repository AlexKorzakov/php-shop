<?php 

class CompanyController
{
    public function actionRegister()
    {
        $latestCompany = array();
        $latestCompany = User::getLatestCompany($userId);
        $userId = User::checkLogged();
        $user = User::getUserById($userId);
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
            if(User::checkEmailExsists($email)) {
                $errors[] = 'Такой Email уже используется.';
            }
            if ($errors == false) {
                $result = User::companyRegister($name, $psnr, $tin, $cor, $che_a, $cor_a, $bic, $bank, $legal_adrs, $actual_adrs, $email, $general_director);
            }
        }


        require_once(ROOT . '/views/cabinet/register.php');

        return true;
    }
}


?>