<?php
require_once ('config/connect.php');
$ID_Сотрудник = $_POST['ID_Сотрудник'];
$Серийный_номер = $_POST['Серийный_номер'];
$Модель = $_POST['Модель'];
$Место_нахождения = $_POST['Место_нахождения'];
$СписанНе_списан = $_POST['СписанНе_списан'];
$sql = "INSERT INTO `Принтер`(`ID_Сотрудник`, `Серийный_номер`, `Модель`, `Место_нахождения`, `СписанНе_списан`) VALUES ('$ID_Сотрудник','$Серийный_номер','$Модель','$Место_нахождения','$СписанНе_списан')";
$connect -> query ($sql);
header ('location: index2.php');
?>