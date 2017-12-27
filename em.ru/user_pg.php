  	<?php
	  			require_once 'inc/header.php';
				require_once 'inc/head.php'; // подключаем скрипт	
				//require_once 'php/auth.php'; // скрипт	регистрации
				$login=$_SESSION['login'];
				//$link=$_SESSION['link'];
				$query="SELECT * FROM usertable WHERE (login='$login')";
				
				require_once 'php/connection.php'; // подключаемся к БД
					
					//$query="SELECT * FROM timetable";
					if ($result = mysqli_query($link, $query))
					{
						//Преобразуем то, что отдала нам база в нормальный массив PHP $row:
						$row = mysqli_fetch_row($result);
					}
				//echo $row[0];
	?>
  	<div class="container">
		<div class="row us-registration">
			<div class="col-xs-4">
				<form action="#" method="POST">
					<div class="form-group row">
  						<label class="col-xs-3 col-form-label" >Логин:</label>
						<label  class="col-xs-2 col-form-label"><?php echo $row[1];?></label>
					</div>
					<div class="form-group row">
  						<label class="col-xs-3 col-form-label">Имя:</label>
						<label class="col-xs-3 col-form-label" ><?php echo $row[3];?></label>
					</div>
					<div class="form-group row">
  						<label class="col-xs-3 col-form-label">Фамилия:</label>
						<label class="col-xs-8 col-form-label" ><?php echo $row[4];?></label>
					</div>
					<div class="form-group row">
  						<label class="col-xs-3 col-form-label">Отчество:</label>
						<label  class="col-xs-2 col-form-label"><?php echo $row[5];?></label>
					</div>
					<div class="form-group row">
  						<label class="col-xs-3 col-form-label">E-mail:</label>
						<label  class="col-xs-2 col-form-label" ><?php echo $row[6];?></label>
					</div>
					<div class="form-group row">
  						<label class="col-xs-3 col-form-label">Телефон:</label>
						<label  class="col-xs-2 col-form-label" ><?php echo $row[7];?></label>
					</div>
					<div class="form-group row">
  						<label class="col-xs-3 col-form-label">Номер паспорта:</label>
						<label class="col-xs-2 col-form-label" ><?php echo $row[8];?></label>
					</div>
					<div class="form-group row">
  						<label class="col-xs-3 col-form-label">Дата рождения:</label>
						<label  class="col-xs-4 col-form-label" ><?php echo $row[9];?></label>
					</div>
					<div class="form-group row">
  						<label class="col-xs-3 col-form-label">Пол:</label>
						<label  class="col-xs-2 col-form-label" ><?php echo $row[10];?></label>
					</div>
 					<?php
					if(!isset($_POST['chgpassbtn']))
  					echo '<button id=chgpassbtn type="" name="chgpassbtn" value="chgpass" class="btn btn-primary col-xs-offset-1 col-xs-5">Сменить пароль</button>';
					?>
				</form>
			</div>
			<div class="col-xs-8">
			<?php
			if(!isset($_POST['chgpassbtn']))
			{
				require_once 'php/user_table.php';
			/*	$query="SELECT `flight_number`,`order_pay`, `place` FROM orders WHERE (login='$login')";
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
									{
										//здесь можно заполнить шапку

										//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
										for ($data = []; $row = mysqli_fetch_row($result); $data[] = $row);
										//echo $data[0][0];
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
									}
									// закрываем подключение
									//mysqli_close($link);
								?>
								</tbody>
							  </table>
          	<?php
							
							
							
							////////////////////////////////////////////////////
						}//require_once 'views/table.php'; // подключаем скрипт
					}*/
			}
			else
			{
				require_once 'php/chg_pass.php';
				?>
				<form action="#" method="POST">
				  <div class="form-group">
					<label for="inputPassword">Текущий пароль:</label>
					<input name="cur_passs" type="password" class="form-control" placeholder="" required>
				  </div>
				  <div class="form-group">
					<label for="inputPassword">Новый пароль:</label>
					<input name="new_pass" type="password" class="form-control" id="inputPassword" minlength="6" placeholder="" required>
					<label for="inputPassword">Повторите пароль:</label>
					<input name="rep_new_pass" type="password" class="form-control" id="inputPassword"  minlength="6" placeholder="" required>
				  </div>
				  <button type="submit" name="chgpassbtn" value="chgpass" class="btn btn-default">Изменить</button>
				</form>
				<?php
			}
			?>
			</div>
		</div>
	</div>
<?php require_once 'inc/footer.php'; ?>