<?php
require_once ('config/connect.php');
$ID_Сотрудник = $_POST['ID_Сотрудник'];
$Серийный_номер = $_POST['Серийный_номер'];
$Модель = $_POST['Модель'];
$Место_нахождения = $_POST['Место_нахождения'];
$СписанНе_списан = $_POST['СписанНе_списан'];
$sql = "INSERT INTO `МФУ`(`ID Сотрудник`, `Серийный номер`, `Модель`, `Место нахождения`, `Списан\Не списан`) VALUES ('$ID_Сотрудник','$Серийный_номер','$Модель','$Место_нахождения','$СписанНе_списан')";
$connect -> query ($sql);
header ('location: index3.php');
?>