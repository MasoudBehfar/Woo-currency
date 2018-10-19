<?php
include "db.php";

$id = $_POST['id'];

$dollar = $_POST['dollar'];

$euro = $_POST['euro'];

$stmt = $connection->prepare("UPDATE currency SET dollar=$dollar,euro=$euro WHERE id=$id");
$stmt->execute();

