<?php
if(isset($_POST['C_NUMBER'])) $C_NUMBER = $_POST['C_NUMBER'];
if(isset($_POST['CH_NAME'])) $CH_NAME = $_POST['CH_NAME'];
if(isset($_POST['MM'])) $MM = $_POST['MM'];
if(isset($_POST['YYYY'])) $YYYY = $_POST['YYYY'];
if(isset($_POST['CVC'])) $CVC = $_POST['CVC'];
 
echo "Номер карты: $C_NUMBER  <br> Имя владельца: $CH_NAME <br> Срок действия карты: $MM $YYYY <br> CVV/CVC код: $CVC";
?>