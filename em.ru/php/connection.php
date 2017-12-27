<?php
define ("HOST","127.0.0.1");
define ("DATABASE", "mysite");
define ("USER", "root");
define ("PASSWORD", "");

$link = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die("Ошибка " . mysqli_error($link));
mysqli_query($link, 'SET NAMES UTF8');
?>