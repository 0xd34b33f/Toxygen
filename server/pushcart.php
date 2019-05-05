<?php
//print_r($_POST);

include_once("sql_misc.php");

#print_r($_POST);
$size = count($_POST) / 4;
print($size);
$i = 0;
while ($i < $size)
{
	print($_POST["animal-name".strval($i)]);
	$product_row = generic_read("products", $_POST["animal-name".strval($i)]);
	print($product_row);
	$count = $product_row["quantity"];
	$count = $count - $_POST["animal-count".strval($i)];
	$val = array("product_name"=> $_POST["animal-name".strval($i)], "quantity" => $count);
	generic_update("products", $val);
	$i += 1;
}



