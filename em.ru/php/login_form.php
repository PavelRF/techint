<?php
$login = "unknown";
$password = "unknown";
if(isset($_POST['login'])) $login = $_POST['login'];
if(isset($_POST['password'])) $password = $_POST['password'];
 
echo "Ваш логин: $login  <br> Ваш пароль: $password";
?>