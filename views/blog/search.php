<?php
define("DB_HOST","localhost");
define("DB_NAME",""); //Имя базы
define("DB_USER",""); //Пользователь
define("DB_PASSWORD",""); //Пароль
define("PREFIX",""); //Префикс если нужно
$mysqli = new mysqli('localhost', 'root', '', 'stroi_mag');
$mysqli -> query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");
if(!empty($_POST["referal"])){ //Принимаем данные
    $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["referal"]))));
    $db_referal = $mysqli -> query("SELECT * from product WHERE name LIKE '%$referal%'")
    or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');
    while ($row = $db_referal -> fetch_array()) {
        echo "\n<li>".$row["name"]."</li>"; //$row["name"] - имя поля таблицы
    }
}
$referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["referal"]))));
$db_referal = $mysqli -> query("SELECT * from product WHERE name LIKE '%$referal%'");
$post = $db_referal -> fetch_array();
echo "\n<li>".$post["name"]."</li>";;
$post = ($_POST["referal"]);
echo $post;
?>