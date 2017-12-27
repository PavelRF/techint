<?php
$query="SELECT `flight_number`,`order_pay`, `place` FROM orders WHERE (login='$login')";
if ($result = mysqli_query($link, $query))
{
	$numrows=mysqli_num_rows($result);
	if($numrows==0) echo "Вы не приобрели еще ни одного билета";
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
				<th>Место</th>
			  </tr>
			</thead>
			<tbody> 
			 <?php
				for ($data = []; $row = mysqli_fetch_row($result); $data[] = $row);
				foreach ($data as $row)
				{
					$query="SELECT * FROM schedule WHERE (flight_number='$row[0]')";
					if ($result = mysqli_query($link, $query))
					{
						for ($data_sch = []; $row_sch = mysqli_fetch_row($result); $data_sch[] = $row_sch);
						foreach ($data_sch as $row_sch)
						{
							echo "<tr>";
							for ($i=1; $i<8; $i++) 
							{
								echo "<td>$row_sch[$i]</td>";
							}
							echo "<td>$row[2]</td>";
							if ($row[1]==0)
							{
								echo "<td><a href=\"pay_form.php?num=$row[0]&pay=1&res=1\">Оплатить</a></td>";
							}
						}
					}
				}
				echo '</table>';
				mysqli_free_result($result);
			?>
			</tbody>
		</table>
<?php
	}
}
?>