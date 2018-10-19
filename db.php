<?php
$connection = new PDO("mysql:host=localhost;dbname=currency;chartset=utf8","root","");
$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);