  	<?php
	  			require_once 'inc/header.php';
				require_once 'inc/head.php'; // подключаем скрипт	
				
$num = "unknown";
if(isset($_GET['num'])) $num = $_GET['num'];
if(isset($_GET['pay'])) $pay = $_GET['pay'];
if(isset($_GET['res'])) $res = $_GET['res'];
//echo "id рейса: $num +1111";
$login=$_SESSION['login'];
if(isset($_POST['buybtn']) OR isset($_POST['reservbtn']))
{
	require_once 'php/buy_ticket.php';
}
else
{	
?>
  	<div class="container">
		<div class="row ">
			<div class="col-xs-4 col-xs-offset-4">
				<form action="#" method="POST">
					<?php
 					if($pay && $res)
					{}
 					else
					{
 					?>
					<div class="form-group row">
  						<label for="example-text-input" class="col-xs-4 col-form-label" >Номер рейса: <?php echo $num;?></label>
  						<label for="example-text-input" class="col-xs-2 col-form-label" >Место:</label>
  						<div class="col-xs-6">
  							<input name="place" class="form-control" type="text" placeholder="" id="example-text-input">
  						</div>
  						<label class="col-xs-12 col-form-label">(оставьте поле пустым, если номер места неважен)</label>
					</div>
					<?php
					}
 					if($pay)
					{
 					?>
					<div class="form-group row">
  						<label for="example-text-input" class="col-form-label" >Номер карты (CARD NUMBER)</label>
  						<input name="card_number" class="form-control" type="text" placeholder="" id="example-text-input" required minlength="16" maxlength="16" >
  						
					</div>
					<div class="form-group row">
  						<label class="col-form-label">Имя владельца (CARDHOLDER NAME)</label>
  						<input name="ch_name" class="form-control" type="text" value="" required>
					</div>
					<div class="form-group row">
  						<label class="col-form-label">Срок действия карты (VALID THRU)</label>
  						<div class="form-group row">
  							<div class="col-xs-7">
  								<select name="month" class="form-control col-xs-2" id="exampleSelect1">
									<option value="0">--</option>
									<option value="01"> 1 - январь</option>
									<option value="02"> 2 - февраль</option>
									<option value="03"> 3 - март</option>
									<option value="04"> 4 - апрель</option>
									<option value="05"> 5 - май</option>
									<option value="06"> 6 - июнь</option>
									<option value="07"> 7 - июль</option>
									<option value="08"> 8 - август</option>
									<option value="09"> 9 - сентябрь</option>
									<option value="10">10 - октябрь</option>
									<option value="11">11 - ноябрь</option>
									<option value="12">12 - декабрь</option>
								</select>
							</div>
							<div class="col-xs-5">	
								<select name="year" class="form-control col-xs-2" id="exampleSelect2">
									<option value="0"  >--</option>
									<option value="2017">2010</option>
									<option value="2018">2011</option>
									<option value="2019">2012</option>
									<option value="2020">2013</option>
									<option value="2021">2014</option>
									<option value="2022">2015</option>
								</select>
							</div>
						</div>
  					</div>
					
				
					<div class="form-group row">
  						<label class="col-xs-2 col-form-label">CVV/CVC код</label>
  						<div class="col-xs-10">

    						<input name="cvv" class="form-control" type="password" value="" maxlength="3" required>
  						</div>
  						<label class="col-xs-10 col-form-label">(последние 3 цифры номера на оборотной стороне карты)</label>
					</div>
					<?php
					echo '<button type="submit" name="buybtn" value="buy" class="btn btn-primary col-xs-offset-5 col-xs-4">Олатить</button>';	
					}
 					else echo '<button  type="submit" name="reservbtn" value="buy" class="btn btn-primary col-xs-offset-5 col-xs-4">Резерв</button>';
					?>
				</form>
			</div>
			<div class="col-xs-4"></div>
		</div>
	</div>
<?php 
}
require_once 'inc/footer.php'; ?>