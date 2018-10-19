<?php
date_default_timezone_set("Asia/Tehran");
include "db.php";
//var_dump($_POST);
$counter = 1;
while ($counter <= 20)
{
	$dollar  =rand(5000,8500);
	$euro = rand(6000,10000);
	$day = rand(1,31);
	$now = date("Y-m-$day H:i:s");
	$stmt=$connection->prepare("INSERT INTO currency (`dollar`,`euro`,`create_date`) VALUES($dollar,$euro,'$now')");
	$stmt->execute();
	$counter++;
}
