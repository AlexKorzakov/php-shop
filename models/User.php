<?php 

class User
{
    public static function register($name, $email, $password){
        $db = Db::getConnection();

        $sql = 'INSERT INTO user (name, email, password) VALUES (:name, :email, :password)';

        $result = $db->prepare($sql);
        $result->bindParam('name', $name, PDO::PARAM_STR);
        $result->bindParam('email', $email, PDO::PARAM_STR);
        $result->bindParam('password', $password, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function checkUserData($email, $password)
    {
        $db = Db::getConnection();

        $sql ='SELECT * FROM user WHERE email = :email AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();
        if($user) {
            return $user['id'];
        }

        return false;
    }

    public static function auth($userId){
        $_SESSION['user'] = $userId;
    }

    public static function checkLogged(){
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        header('Location: /user/login');
    }

    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    public static function checkName($name){
        if(strlen($name) >= 2){
            return true;
        }
        return false;
    }

    public static function checkPassword($password) {
        if(strlen($password) >= 6){
            return true;
        }
        return false;
    }

    public static function checkEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    public static function checkPhone($phone)
    {
        if (strlen($phone) >= 10) {
            return true;
        }
        return false;
    }
    public static function checkEmailExsists($email){

        $db = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE email = :email ';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }

    public static function getUserById($id)
    {
        if ($id){
            $db = Db::getConnection();

            $sql ='SELECT * FROM user WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_STR);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }

    public static function getCompanyListByUser($userId = false)
    {
        if($userId) {

            $db = Db::getConnection();
            $companyList = array();
            $result = $db->query("SELECT id, name, psnr, tin, cor, che_a, cor_a, bic, bank, legal_adrs, actual_adrs, email, general_director FROM company WHERE user_id = '$userId' ORDER BY id ASC ");
            $i = 0;
            while($row = $result->fetch()) {
                $companyList[$i]['id'] = $row['id'];
                $companyList[$i]['name'] = $row['name'];
                $companyList[$i]['psnr'] = $row['psnr'];
                $companyList[$i]['tin'] = $row['tin'];
                $companyList[$i]['cor'] = $row['cor'];
                $companyList[$i]['che_a'] = $row['che_a'];
                $companyList[$i]['cor_a'] = $row['cor_a'];
                $companyList[$i]['bic'] = $row['bic'];
                $companyList[$i]['bank'] = $row['bank'];
                $companyList[$i]['legal_adrs'] = $row['legal_adrs'];
                $companyList[$i]['actual_adrs'] = $row['actual_adrs'];
                $companyList[$i]['email'] = $row['email'];
                $companyList[$i]['general_director'] = $row['general_director'];
                $i++;
            }
            return $companyList;
        }
    }
    public static function getId($userCompany)
    {
        $db = Db::getConnection();

        $sql = "SELECT id FROM company WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam('id', $userCompany, PDO::PARAM_STR);
        return $result->execute();
    }
    public static function testCheck($a)
    {
        $db = Db::getConnection();

        $testList = array();
        $sql = ("SELECT id, company_name, date, total_price FROM product_order WHERE company_name= '$a' ");
        $result = $db->query($sql);
        $i=0;
        
        while($row = $result->fetch()) {
            $testList[$i]['id'] = $row['id'];
            $testList[$i]['company_name'] = $row['company_name'];
            $testList[$i]['date'] = $row['date'];
            $testList[$i]['total_price'] = $row['total_price'];
            $i++;
        }

        return $testList;
    }

    public static function companyRegister($name, $psnr, $tin, $cor, $che_a, $cor_a, $bic, $bank, $legal_adrs, $actual_adrs, $email, $general_director, $userId){
        $db = Db::getConnection();

        $sql = "INSERT INTO company (name, psnr, tin, cor, che_a, cor_a, bic, bank, legal_adrs, actual_adrs, email, general_director, user_id) VALUES (:name, :psnr, :tin, :cor, :che_a, :cor_a, :bic, :bank, :legal_adrs, :actual_adrs, :email, :general_director, :user_id)";

        $result = $db->prepare($sql);
        $result->bindParam('name', $name, PDO::PARAM_STR);
        $result->bindParam('psnr', $psnr, PDO::PARAM_STR);
        $result->bindParam('tin', $tin, PDO::PARAM_STR);
        $result->bindParam('cor', $cor, PDO::PARAM_STR);
        $result->bindParam('che_a', $che_a, PDO::PARAM_STR);
        $result->bindParam('cor_a', $cor_a, PDO::PARAM_STR);
        $result->bindParam('bic', $bic, PDO::PARAM_STR);
        $result->bindParam('bank', $bank, PDO::PARAM_STR);
        $result->bindParam('legal_adrs', $legal_adrs, PDO::PARAM_STR);
        $result->bindParam('actual_adrs', $actual_adrs, PDO::PARAM_STR);
        $result->bindParam('email', $email, PDO::PARAM_STR);
        $result->bindParam('general_director', $general_director, PDO::PARAM_STR);
        $result->bindParam('user_id', $userId, PDO::PARAM_STR);
        return $result->execute();
    }
    //выбор компаний
        public static function getLatestCompany($userId)
    {     
        $db = Db::getConnection();

        $companyList = array();

        $result = $db->query("SELECT id, name FROM company WHERE user_id = '$userId' ");
        $i = 0;
        while ($row = $result->fetch()) {
            $companyList[$i]['id'] = $row['id'];
            $companyList[$i]['name'] = $row['name'];
            $i++;
        }
        return $companyList;
    }
    

    public static function testAjax(){
        require_once(ROOT . '/views/cabinet/register.php');
        return true;
    }
}

?>
