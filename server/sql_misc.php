<?php
include_once("auth_sql.php");
function wrap_single_quotes_comma($str)
{
	return "'" . $str . "', ";
}

function wrap_single_quotes($str)
{
	return "'" . $str . "' ";
}

function wrap_comma_space($str)
{
	return $str . ", ";
}

function check_field($key_value, $table_name, $field_name, $field_value)
{
	$con = connect_sql();
	$query = "SELECT " . $key_value . " from " . $table_name . " where " . $field_name . " = " . "'" . $field_value . "'" . ";";
//	print "\nCHECK query = " . $query . "\n";
	$res = mysqli_query($con, $query);
	if ($res)
		return mysqli_num_rows($res);
	else
		return false;
}

function generic_insert($table_name, $values)
{

	$query = "INSERT INTO " . $table_name . "(";
	$inserted_fields = "";
	$inserted_values = "";
	foreach ($values as $key => $value) {
		$inserted_fields = $inserted_fields . wrap_comma_space($key);
		$inserted_values = $inserted_values . wrap_single_quotes_comma($value);
	}
	$inserted_fields = rtrim($inserted_fields, ", ");
	$inserted_values = rtrim($inserted_values, ", ");
	$query = $query . $inserted_fields . ") " . "values ( " . $inserted_values . ");";
	$res = mysqli_query(connect_sql(), $query);
	return $res;
}

function generic_update($table_name, $values)
{
	$query = "UPDATE " . $table_name . " SET ";
	$updates_str = "";
	$flag = 1;
	foreach ($values as $key => $value) {
		if ($flag) {
			$key_value = $key;
			$data_value = $value;
			$flag = 0;
		} else
			$updates_str = $updates_str . "$key='$value', ";
	}
	if (!check_field($key_value, $table_name, $key_value, strval($data_value)))
		return (2);
	$updates_str = rtrim($updates_str, ", ");
	$query = $query . $updates_str . " WHERE " . $key_value . "=" . $data_value;
	$res = mysqli_query(connect_sql(), $query);
	return $res;
}

function generic_delete($table_name, $values)
{
	$key_value = array_keys($values);
	if (!check_field($key_value, $table_name, $key_value, strval($values[$key_value[0]])))
		return (2);
	$query = "DELETE FROM " . $table_name . " WHERE " . $key_value[0] . "=" . $values[$key_value[0]];
	$res = mysqli_query(connect_sql(), $query);
	return $res;
}

function generic_read($table_name, $values)
{
	$query = "SELECT * FROM " . $table_name . " WHERE " . $values . ";";
	$res = mysqli_query(connect_sql(), $query);
	if (!$res)
		return false;
//	var_dump($res);
	return $res;
}

//$val = array("username" => "new", "password" => "huiasword", "isAdmin" => 0, "phone"=> 56464, "email" => "qwe@rty.ru", "address" => "addr", "birthday" => "deathday");
//print_r($val);
//print generic_insert("users", $val)."\n";



#$val = array("product_id"=> 4, "description" => "2345678");
#print "update=".generic_update("products", $val)."\n";

#$val = array("product_id"=> 1, "description" => "2345678");
#print "delete = ".generic_delete("products", $val)."\n";
//$res = (generic_read("users", "user_id"));
//var_dump($res[0]);
//var_dump($res["user_id"]);
//var_dump(generic_read("users", "user_id"));

