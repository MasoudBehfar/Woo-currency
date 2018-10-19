<?php
date_default_timezone_set("Asia/Tehran");
include "db.php";
//echo 'id :'.$_REQUEST['id'].'<br>';
echo 'dollar : '.$_REQUEST['dollar'].'<br>';
echo 'euro :' .$_REQUEST['euro'].'<br>';
//var_dump($_POST);
//$dollar = $_POST['dollar'];
//$euro = $_POST['euro'];
//$now = date("Y-m-d H:i:s");
//$stmt=$connection->prepare("INSERT INTO currency (`dollar`,`euro`,`create_date`) VALUES($dollar,$euro,'$now')");
//$stmt->execute();