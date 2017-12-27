  	<?php
	  			require_once 'inc/header.php';
				require_once 'inc/head.php'; // подключаем скрипт	
				require_once 'php/auth.php'; // скрипт	регистрации
	?>
  	<div class="container">
		<div class="row us-registration">
			<div class="col-xs-9">
				<form action="#" method="POST">
					
					<div class="form-group row">
  						<label for="example-text-input" class="col-xs-2 col-form-label" minlength="6">Логин:*</label>
  						<div class="col-xs-10">
    						<input name="login" class="form-control" type="text" placeholder="Логин" id="example-text-input" required minlength="6">
  						</div>
					</div>
					<div class="form-group row">
  						<label class="col-xs-2 col-form-label">Пароль:*</label>
  						<div class="col-xs-10">
    						<input name="password" class="form-control" type="password" value="" required minlength="6">
  						</div>
					</div>
					<div class="form-group row">
  						<label class="col-xs-2 col-form-label">Подтверждение пароля:*</label>
  						<div class="col-xs-10">
    						<input name="password_confirm" class="form-control" type="password" value="" required minlength="6">
  						</div>
					</div>
					<div class="form-group row">
  						<label class="col-xs-2 col-form-label">Имя:*</label>
  						<div class="col-xs-10">
    						<input name="first_name" class="form-control" type="text" value="" required>
  						</div>
					</div>
					<div class="form-group row">
  						<label class="col-xs-2 col-form-label">Фамилия:*</label>
  						<div class="col-xs-10">
    						<input name="last_name" class="form-control" type="text" value="" required>
  						</div>
					</div>
					<div class="form-group row">
  						<label class="col-xs-2 col-form-label">Отчество:</label>
  						<div class="col-xs-10">
    						<input name="middle_name" class="form-control" type="text" value="" placeholder="Если есть">
  						</div>
					</div>
					<div class="form-group row">
  						<label class="col-xs-2 col-form-label">E-mail:*</label>
  						<div class="col-xs-10">
    						<input name="email" class="form-control" type="email" value="" placeholder="your@mail.com" required>
  						</div>
					</div>
					<div class="form-group row">
  						<label class="col-xs-2 col-form-label">Телефон:*</label>
  						<div class="col-xs-10">
    						<input name="phone" class="form-control" type="tel" value="" placeholder="+7-ххх-ххх-хх-хх" pattern="\+7[-]{0,1}\d{3}[-]{0,1}\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" required>
  						</div>
					</div>
					<div class="form-group row">
  						<label class="col-xs-2 col-form-label">Номер паспорта:*</label>
  						<div class="col-xs-10">
    						<input name="passport_id" class="form-control" type="text" value="" required>
  						</div>
					</div>
					<div class="form-group row">
  						<label class="col-xs-2 col-form-label">Дата рождения:*</label>
  						<div class="col-xs-10">
    						<input name="birthdate" class="form-control" type="date" value="" required>
  						</div>
					</div>
					<div class="form-group row">
  						<label class="col-xs-2 col-form-label">Пол:</label>
  						<div class="col-xs-10">
    						<select name="gender_id" class="form-control" id="exampleSelect1">
      							<option value="0">--</option>
      							<option value="Муж.">Муж.</option>
      							<option value="Жен.">Жен.</option>
    						</select>
  						</div>
					</div>
					<div class="form-group row">
  						<label class="col-xs-2 col-form-label">Почему решили воспользоваться услугами нашей компании?</label>
  						<div class="col-xs-10">
    						<textarea name="quiz" class="form-control" type="text" value=""></textarea>
  						</div>
					</div>
					<div class="form-check">
    					<label class="form-check-label" for=regflag>
      					<input id=regflag name="flag" type="checkbox" checked value="1">
      						Сагласен на получение рекламно информационных рассылок.
    					</label>
  					</div>
  					<button id=regbtn type="submit" name="regbtn" value="reg" class="btn btn-primary col-xs-offset-5 col-xs-2">Отправить</button>
				</form>
			</div>
			<div class="col-xs-3"></div>
		</div>
	</div>
<?php require_once 'inc/footer.php'; ?>