<?php

if(isset($_POST['outbtn']))
{ //Выход
	unset($_SESSION['login']);
	unset($_SESSION['link']);
	session_destroy();
	header('Location: index.php');
}
elseif (isset($_POST['inbtn']))
{ //Вход
	
if(isset($_POST['password']) AND isset($_POST['login']))
{
	$login = $_POST['login'];
	$password = $_POST['password'];
	require_once 'connection.php'; 
	$query="SELECT `password` FROM usertable WHERE (login='$login')";

	if ($result = mysqli_query($link, $query))
		{
			$numrows=mysqli_num_rows($result);
			if($numrows==0) 
			{
				?><script type="text/javascript"> alert("Неверный логин или пароль!!!"); </script><?php
			}
			else
			{
				$row = mysqli_fetch_assoc($result);
				if (password_verify($password, $row['password'])) 
				{ 
					$_SESSION['login'] = $login; //пишем login в сессию
				}
				else 
				{
					?><script type="text/javascript"> alert("Неверный логин или пароль!!!"); </script><?php
				}
			}
		}
} else header('Location: index.php');
}
elseif(isset($_POST['regbtn']))
{//регистрация
if(isset($_POST['login'])) $login = $_POST['login'];
if(isset($_POST['password'])) $password = $_POST['password'];
if(isset($_POST['password_confirm'])) $password_confirm = $_POST['password_confirm'];
if(isset($_POST['first_name'])) $first_name = $_POST['first_name'];
if(isset($_POST['last_name'])) $last_name = $_POST['last_name'];
if(isset($_POST['middle_name'])) $middle_name = $_POST['middle_name'];
if(isset($_POST['email'])) $email = $_POST['email'];
if(isset($_POST['phone'])) $phone = $_POST['phone'];
if(isset($_POST['passport_id'])) $passport_id = $_POST['passport_id'];
if(isset($_POST['birthdate'])) $birthdate = $_POST['birthdate'];
if(isset($_POST['gender_id'])) $gender_id = $_POST['gender_id'];
if(isset($_POST['quiz'])) $quiz = $_POST['quiz'];
if(isset($_POST['flag'])) $flag = $_POST['flag'];
 

if ($password==$password_confirm)
{
	if(strlen($login)<6) {$msg = "Логин должен быть больше 5ти символов";}
	elseif (strlen($password)<6) {$msg = "Пароль должен быть больше 5ти символов";}
	else 
	{
		$password=password_hash($password,PASSWORD_DEFAULT);
		require_once 'connection.php'; // подключаемся к БД

		$query = "INSERT INTO usertable SET login='$login', password='$password', first_name='$first_name', last_name='$last_name', middle_name='$middle_name', email='$email', phone='$phone', passport_id=$passport_id, birthdate='$birthdate', gender_id='$gender_id', quiz='$quiz', flag=$flag";
		if ($result = mysqli_query($link, $query))
		{
			$msg = "Регистрация прошла успешно";
		}	
		else {
			$msg = mysqli_error($link);
		}
	}
}
else {/*echo "Пароли не совпадают!";*/ $msg = "Пароли не совпадают!";}

?><script type="text/javascript"> alert("<?php echo $msg; ?>"); </script><?php
}
?>