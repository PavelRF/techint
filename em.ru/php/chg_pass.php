<?php
if(isset($_POST['cur_passs']) AND isset($_POST['new_pass']) AND isset($_POST['rep_new_pass']))
{
$cur_passs = $_POST['cur_passs'];
$new_pass = $_POST['new_pass'];
$rep_new_pass = $_POST['rep_new_pass'];
require_once 'connection.php'; // подключаемся к БД
	$query="SELECT `password` FROM usertable WHERE (login='$login')";

	if ($result = mysqli_query($link, $query))
	{
		$row = mysqli_fetch_assoc($result);
				if (password_verify($cur_passs, $row['password'])) 
				{ 
					if ($new_pass==$rep_new_pass)
					{
						$hash=password_hash($new_pass,PASSWORD_DEFAULT);
						$query="UPDATE usertable SET `password`='$hash' WHERE (login='$login')";
						if ($result = mysqli_query($link, $query))
						{
							$msg="Пароль успешно изменен";
						}
						else $msg = mysqli_error($link);
					}
					else $msg="Пароли не совпадают";
				}
				else $msg = "Введен неверный действующий пароль.";
	}
	else $msg = mysqli_error($link);
	
?><script type="text/javascript"> alert("<?php echo $msg; ?>"); </script><?php
}
?>