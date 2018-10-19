<?php
include "db.php";
$id = $_GET['id'];
$stmt = $connection->prepare('DELETE FROM currency WHERE id='.$id);
$stmt->execute();

