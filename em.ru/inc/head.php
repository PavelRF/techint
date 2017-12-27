<?php
	session_start(); //стартуем сессию
	require_once 'php/auth.php';
	if(!empty($_SESSION['login']))
		$usname = $_SESSION['login'];
	else
		$usname = '';
	
?>
	
		<div class="container">
			<div class="row">
				<h1><a href="index.php">El<img src="pic/Logo_Elon.png" width="2%" height="2%"alt="о">n Musk inc.</a></h1>
				<div class="navbar navbar-default">
					<div class="container">
						<div class="navbar-header">
							<button type="batton" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
								<span class="sr-only">Открыть навигацию</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!--<a class=navbar-brand href="#">Название компании</a>-->
						</div>
						<div class="collapse navbar-collapse" id="responsive-menu">
							<ul class="nav navbar-nav">
								<li><a href="flight_search.php">Пассажирам</a></li>
								<li><a href="#">Контакты</a></li>
								<li><a href="#">О компании</a></li>
							</ul>
							<form action="#" class="navbar-form navbar-right" method="post">
							<?php if(empty($_SESSION['login'])) {?>
								<div class="form-group">
									<input class="form-control" type="text" name="login" placeholder="Логин" required>
									<input class="form-control" type="password" name="password" placeholder="Пароль" required>
								</div>
								<button class="btn btn-primary" type="submit" name="inbtn" value="in">
									<i class="fa fa-sign-in"></i> Вход
								</button>
								<button class="btn btn-warning" type="button"><a href="registration.php">Регистрация</a></button>
							<?php } else {?>
								<div class="form-group">
									<a href="user_pg.php"><?php echo $_SESSION['login'];?></a>
									
								</div>
								<button class="btn btn-primary" type="submit" name="outbtn" value="out">
									<i class="fa fa-sign-in"></i> Выход
								</button>
							<?php } ?>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
