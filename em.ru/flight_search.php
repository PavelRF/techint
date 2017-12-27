  	<?php	
				require_once 'inc/header.php';
				require_once 'inc/head.php'; // подключаем скрипт	
	?>
  	<div class="container">
		<div class="row bgtest">
			<div class="col-xs-4">
				<form action="flight_search.php" method="POST">
  					<div class="form-group row">
    					<label>Пункты отправления и назначения</label>
    					<div class="form-group">
    						<input name="whence" type="text" class="form-control" placeholder="ОТКУДА" required>
    					</div>
    					<div class="form-group">
    						<input name="whither" type="text" class="form-control" placeholder="КУДА" required>
    					</div>
  					</div>
  					<div class="form-group row">
    					<label>Дата отправления</label>
    					<div class="form-group">
    						<input name="departure_date" type="date" class="form-control" required>
    					</div>
  					</div>
  
  					<button type="submit" class="btn btn-primary col-xs-12">Найти</button>
				</form>
			</div>
			<div class="col-xs-8">
			<?php
				require_once 'php/schedule_table.php'; // подключаем скрипт
				
			?>
			</div>
		</div>
	</div>
	<?php require_once 'inc/footer.php'; ?>