<?php 
$host = 'localhost';
$db   = 'stroi_mag';
$user = 'root';
$pass = '';
$charset = 'utf8';

$q = $_GET['q'];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

$w = array();
$result = $pdo->query("SELECT id, company_name, date, products, total_price FROM product_order WHERE company_name = '$q'");
$i = 0;
$totalP = 0;

echo "<table class='table-bordered table-striped table'>
<tr>
<th>№</th>
<th>Название компании</th>
<th>Дата</th>
<th>Products</th>
<th>Сумма НДС, руб</th>
<th>Всего с НДС, руб</th>
</tr>";
while($row = $result->fetch()) {
    $w[$i]['id'] = $row['id'];
    $w[$i]['company_name'] = $row['company_name'];
    $w[$i]['date'] = $row['date'];
    $w[$i]['products'] = $row['products'];
    $w[$i]['total_price'] = $row['total_price'];
    $totalP = $totalP + $row['total_price'];
    $nds = $row['total_price'] *(20/120);
    $totalNds = $totalNds + $nds;

    $i++;
    echo "<tr>";
    echo "<td>Счет № " . $row['id'] . "</td>";
    echo "<td>" . $row['company_name'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['products'] . "</td>";
    echo "<td>" . $nds . " Р.</td>";
    echo "<td>" . $row['total_price'] . " Р.</td>";
}
echo"</tr>";
echo"<tr>";
echo"<td colspan='4'>Итого:</td>";
echo"<td>".$totalNds." Р.</td>";
echo"<td>".$totalP." Р.</td>";
echo "</tr>";
echo "</table>";

?>
