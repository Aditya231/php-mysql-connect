<?php
$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'username', 'password');

include 'IndexModel.php';

$indexModel = new IndexModel($db);
$result = $indexModel->getTheData();

include 'template.php';
