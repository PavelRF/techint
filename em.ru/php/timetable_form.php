<?php
if(isset($_POST['WHENCE'])) $WHENCE = $_POST['WHENCE'];
if(isset($_POST['WHERE'])) $WHERE = $_POST['WHERE'];
if(isset($_POST['DATE_DEPART'])) $DATE_DEPART = $_POST['DATE_DEPART'];
if(isset($_POST['TIME_DEPART'])) $TIME_DEPART = $_POST['TIME_DEPART'];

echo "ОТКУДА: $WHENCE  <br> КУДА: $WHERE <br> Дата и время отправления: $DATE_DEPART $TIME_DEPART";
?>