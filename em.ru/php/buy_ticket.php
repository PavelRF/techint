<?php
require_once 'connection.php'; 
$datetime=date("Y-m-d H:i:s");
if(isset($_POST['place'])) $place = $_POST['place'];
if(isset($_POST['card_number'])) $card_number = $_POST['card_number'];
if(isset($_POST['ch_name'])) $ch_name = $_POST['ch_name'];
if(isset($_POST['month'])) $month = $_POST['month'];
if(isset($_POST['year'])) $year = $_POST['year'];
if(isset($_POST['cvv'])) $cvv = $_POST['cvv'];
$busy = 0;
if(!empty($place))
{
	$query="SELECT `place` FROM orders WHERE (flight_number='$num')";
	if ($result = mysqli_query($link, $query))
	{
		for ($data = []; $row = mysqli_fetch_row($result); $data[] = $row);
		foreach ($data as $row)
		{
			if($place==$row[0])
			{
				$msg="Выбранное место уже занято.";
				$busy = 1;
			}
		}
	}
}
else $busy=0;
if (($pay && !$res && !$busy) OR (!$pay && $res && !$busy)) //покупка билета сразу или резерв
{	
	$query="SELECT `free_places` FROM schedule WHERE (flight_number='$num')";
		if ($result = mysqli_query($link, $query))
		{
			$row = mysqli_fetch_row($result);
			if(empty($place)) $place=$row[0];
			$free_places=$row[0]-1;
		}
	if(!$pay && $res) $order_pay=0;
	else $order_pay=1;
	$query="INSERT INTO orders (login, flight_number, оrder_time, order_pay, place) VALUES ('$login','$num','$datetime',$order_pay,'$place')";
	if ($result = mysqli_query($link, $query))
	{
		if(!$order_pay) $msg="Билет зарезервирован. Вы можете посмотреть параметры заказа в личном кабинете."; 
		else $msg="Билет оплачен. Вы можете посмотреть параметры заказа в личном кабинете.";
		$query="UPDATE schedule SET `free_places`='$free_places' WHERE (flight_number='$num')";
		if ($result = mysqli_query($link, $query))
		{
		}
		else $msg=mysqli_error($link);
	}
	else $msg=mysqli_error($link);
}
elseif ($pay && $res && !$busy)//билет был зарезервирован, нужно лишь оплатить
{
	$query="UPDATE orders SEt `order_pay`=1 WHERE (login='$login') AND (flight_number='$num')";
	if ($result = mysqli_query($link, $query))
	{
		$msg="Билет успешно оплачен.";
	}
	else $msg=mysqli_error($link);
}
?><script type="text/javascript"> alert("<?php echo $msg; ?>"); </script><?php
?>