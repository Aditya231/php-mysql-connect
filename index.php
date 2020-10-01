<?php
$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'username', 'password');
//else you can also use 'MySQL' as follows :
/*
$host = "localhost"; //servername here
$user = "root"; //default user in xampp, localhost
$pass = ""; //in xampp password is blank / nothing
$db = "testdb"; //your db name here
$conn = mysqli_connect($host, $user, $pass, $db);
*/
// Try Using Sql ! Its Good For Database Connection !
include 'IndexModel.php';

$indexModel = new IndexModel($db);
$result = $indexModel->getTheData();

include 'template.php';
?>
