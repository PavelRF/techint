<?php
if(isset($_POST['whence'])&&isset($_POST['whither'])&&isset($_POST['departure_date'])) 
{
	$whence = $_POST['whence']; 
	$whither = $_POST['whither'];
	$departure_date = $_POST['departure_date'];
	if($whence!=$whither)
	{
		require_once 'connection.php'; // подключаемся к БД
		$query="SELECT * FROM schedule WHERE (whence='$whence') AND (whither='$whither') AND (`departure_date`='$departure_date')";
		if ($result = mysqli_query($link, $query))
		{
			$numrows=mysqli_num_rows($result);
			if($numrows==0) echo "Нет рейсов с заданными параматрами.";
			else 
			{
				?>
				<table class="table">
					<thead>
					  <tr>
						<th>Номер рейса</th>
						<th>Откуда</th>
						<th>Куда</th>
						<th>Дата отправления</th>
						<th>Время отправления</th>
						<th>Дата прибытия</th>
						<th>Время Прибытия</th>
						<th>Число мест</th>
						<th>Свободных мест</th>
					  </tr>
					</thead>
					<tbody> 
				 <?php
				for ($data = []; $row = mysqli_fetch_row($result); $data[] = $row);
				foreach ($data as $row)
				{	
					if($row[9]!=0)
					{
						echo "<tr>";
						for ($i=1; $i<10; $i++) 
						{
							echo "<td>$row[$i]</td>";

						}
						if(!empty($_SESSION['login']))
						{
							echo "<td><a href=\"pay_form.php?num=$row[1]&pay=0&res=1\">Резерв</a></br> <a href=\"pay_form.php?num=$row[1]&pay=1&res=0\">Купить</a></td>";
						}
						echo "</tr>";
					}

				}
				echo '</table>';
				mysqli_free_result($result);
			}
			?>
			</tbody>
			</table>
<?php
		}
	} else echo "Пункт отправления и назначения не должны совпадать";
} else echo "Задайте параметры поиска.";
?>