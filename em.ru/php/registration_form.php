<?php
$login = "unknown";
$password = "unknown";
if(isset($_POST['login'])) $login = $_POST['login'];
if (isset($_POST['password'])) $password = $_POST['password'];
if(isset($_POST['password_confirm'])) $password_confirm = $_POST['password_confirm'];
if(isset($_POST['FIRST_NAME'])) $FIRST_NAME = $_POST['FIRST_NAME'];
if(isset($_POST['LAST_NAME'])) $LAST_NAME = $_POST['LAST_NAME'];
if(isset($_POST['MIDDLE_NAME'])) $MIDDLE_NAME = $_POST['MIDDLE_NAME'];
if(isset($_POST['EMAIL'])) $EMAIL = $_POST['EMAIL'];
if(isset($_POST['PHONE'])) $PHONE = $_POST['PHONE'];
if(isset($_POST['PASSPORT_ID'])) $PASSPORT_ID = $_POST['PASSPORT_ID'];
if(isset($_POST['birthdate_day'])) $birthdate_day = $_POST['birthdate_day'];
if(isset($_POST['birthdate_month'])) $birthdate_month = $_POST['birthdate_month'];
if(isset($_POST['birthdate_year'])) $birthdate_year = $_POST['birthdate_year'];
if(isset($_POST['GENDER_ID'])) $GENDER_ID = $_POST['GENDER_ID'];
if(isset($_POST['QUIZ'])) $QUIZ = $_POST['QUIZ'];
if(isset($_POST['ACCEPT_POST_FLAG'])) $ACCEPT_POST_FLAG = $_POST['ACCEPT_POST_FLAG'];
 
if ($password==$password_confirm)
{
echo "Ваш логин: $login  <br> Ваш пароль: $password <br> Повторение пароля: $password_confirm <br> Имя: $FIRST_NAME <br>
Фамилия: $LAST_NAME <br> Отчество: $MIDDLE_NAME <br> E-mail: $EMAIL <br> Телефон: $PHONE <br> Номер паспорта: $PASSPORT_ID <br>
Дата рождения: $birthdate_day $birthdate_month $birthdate_year <br> Пол: $GENDER_ID <br>
Ответ на вопрос: $QUIZ <br> Рассылка: $ACCEPT_POST_FLAG";
}
else echo "Пароли не совпадают!"
?>