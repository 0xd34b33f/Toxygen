<?php
//print_r($_POST);

include_once("sql_misc.php");
$size = count($_POST);
if ($size < 4)
{
	echo "Заказ не может быть пустым";
	echo "<br><a href=\"../src/animals.php\">Вернуться в магазин</a>";
}
else 
{
	echo "Ваш заказ оформлен!";
	echo "<br><a href=\"../src/animals.php\">Вернуться в магазин</a>";
}
sleep(5);
