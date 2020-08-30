<!DOCTYPE html>
<html>
<?php
/*$connection = new PDO('mysql:host=mysql;dbname=demo;charset=utf8', 'root', 'root');
$query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'");
$tables     = $query->fetchAll(PDO::FETCH_COLUMN);

if (empty($tables)) {
    echo '<p class="center">There are no tables in database <code>demo</code>.</p>';
} else {
    echo '<p class="center">Database <code>demo</code> contains the following tables:</p>';
    echo '<ul class="center">';
    foreach ($tables as $table) {
        echo "<li>{$table}</li>";
    }
    echo '</ul>';
}*/
$conn = new mysqli('172.20.0.2','root','root','demo');
echo $conn->connect_errno;
//$query = $conn->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'")->fetch_array();
//print_r($query);

phpinfo();
 ?>
 </html>
