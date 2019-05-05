<?php
include_once("../server/auth_sql.php");
include_once("../server/sql_misc.php");
/*
$val = array("username" => "admin", "password" => hash("whirlpool", "admin"), "isAdmin" => 1, "phone"=> 89999999999, "email" => "what@are.you", "address" => "looking_at?", "birthday" => "01.01.0001");
print generic_insert("users", $val)."\n";

$val = array("username" => "John", "password" => hash("whirlpool", "John"), "isAdmin" => 0, "phone"=> 89991234561, "email" => "a@a.ru", "address" => "addr", "birthday" => "10.11.2010");
print generic_insert("users", $val)."\n";

$val = array("username" => "Bill", "password" => hash("whirlpool", "Bill"), "isAdmin" => 0, "phone"=> 89991234562, "email" => "b@b.ru", "address" => "addr", "birthday" => "11.11.2010");
print generic_insert("users", $val)."\n";

$val = array("username" => "Stan", "password" => hash("whirlpool", "Stan"), "isAdmin" => 0, "phone"=> 89991234563, "email" => "c@c.ru", "address" => "addr", "birthday" => "13.11.2010");
print generic_insert("users", $val)."\n";

$val = array("username" => "Ron", "password" => hash("whirlpool", "Ron"), "isAdmin" => 0, "phone"=> 89991234564, "email" => "d@d.ru", "address" => "addr", "birthday" => "14.11.2010");
print generic_insert("users", $val)."\n";

$val = array("username" => "Mark", "password" => hash("whirlpool", "Mark"), "isAdmin" => 0, "phone"=> 89991234565, "email" => "e@e.ru", "address" => "addr", "birthday" => "15.11.2010");
print generic_insert("users", $val)."\n";
*/

$val = array("price" => 1234, "description" => "Это же синий попуга", "picture_link" => "https://cdn1.savepice.ru/uploads/2019/5/5/c479c3d4a2ef6e6cc366e8514f83c636-full.jpg", "weight" => 228, "product_name" => "BlueMacaw", "color" => "#7202DC", "width" => "700", "height" => "300", "quantity" => "5", "category" => "bird", "category2" => "none");
print generic_insert("products", $val)."\n";
$val = array("product_name" => "GreenMacaw", "price" => 999.9, "description" => "Это же зеленый попуга", "picture_link" => "https://cdn1.savepice.ru/uploads/2019/5/5/44433f349e3d675e4bdcc45bc592d3fd-full.jpg", "weight" => 322,  "color" => "#008000", "width" => "650", "height" => "280", "quantity" => "9", "category" => "bird", "category" => "none");
print generic_insert("products", $val)."\n";
$val = array("product_name" => "RedMacaw", "price" => 1199, "description" => "Это же красный попуга", "picture_link" => "https://cdn1.savepice.ru/uploads/2019/5/5/5d6ae2d01e508623eda38992d7ae95ee-full.jpg", "weight" => 310,  "color" => "#FF0000", "width" => "680", "height" => "290", "quantity" => "7", "category" => "bird", "category" => "none");
print generic_insert("products", $val)."\n";
$val = array("product_name" => "YellowMacaw", "price" => 1099, "description" => "Это же желтый попуга", "picture_link" => "https://cdn1.savepice.ru/uploads/2019/5/5/02464814efbc6e12a86e9576cdf7cd9d-full.jpg", "weight" => 260,  "color" => "#FFFF00", "width" => "710", "height" => "400", "quantity" => "10", "category" => "bird", "category" => "none");
print generic_insert("products", $val)."\n";
$val = array("product_name" => "Penguin", "price" => 2000, "description" => "Все любят пингвинов, особенно Ургант и Светлаков", "picture_link" => "https://cdn1.savepice.ru/uploads/2019/5/5/65e0e6450cf041b7246cd499ee88ef1b-full.jpg", "weight" => 1900,  "color" => "#000000", "width" => "400", "height" => "1000", "quantity" => "2", "category" => "bird", "category" => "fish");
print generic_insert("products", $val)."\n";
$val = array("product_name" => "Swellfish", "price" => 300.0, "description" => "Всегда можно использовать вместо мяча", "picture_link" => "https://cdn1.savepice.ru/uploads/2019/5/5/fb8a487c425e8b6fd608f5977850e122-full.jpg", "weight" => 100,  "color" => "#ffffff", "width" => "100", "height" => "50", "quantity" => "40", "category" => "fish", "category" => "none");
print generic_insert("products", $val)."\n";
$val = array("product_name" => "Shark", "price" => 7000, "description" => "Дипломированный специалист. Прекрасно решает проблемы с налоговой", "picture_link" => "https://cdn1.savepice.ru/uploads/2019/5/5/7b4ea202c477bb22f63421aee2b8591c-full.jpg", "weight" => 19546,  "color" => "#ffffff", "width" => "1000", "height" => "4000", "quantity" => "3", "category" => "fish", "category" => "rodents");
print generic_insert("products", $val)."\n";
$val = array("product_name" => "Alpaca", "price" => 0.01, "description" => "Альпаки бесценны! Потому что бесполезны", "picture_link" => "https://cdn1.savepice.ru/uploads/2019/5/5/b4b09e862a50767bdbc918aa011970da-full.jpg", "weight" => 5000,  "color" => "#000000", "width" => "500", "height" => "2000", "quantity" => "18", "category" => "mammal", "category" => "none");
print generic_insert("products", $val)."\n";
$val = array("product_name" => "Bat", "price" => 14.88, "description" => "Пытались продать бэтмена, но его уже раскупили с потрохами. Покупайте древнего вампира!", "picture_link" => "https://cdn1.savepice.ru/uploads/2019/5/5/9266b4e5cb5734a539aa25bb8e7c9714-full.jpg", "weight" => 80,  "color" => "#ffffff", "width" => "100", "height" => "50", "quantity" => "400", "category" => "mammal", "category" => "bird");
print generic_insert("products", $val)."\n";
$val = array("product_name" => "Сapybara", "price" => 800.1, "description" => "Станет украшением Вашего аквариума", "picture_link" => "https://cdn1.savepice.ru/uploads/2019/5/5/0fef5c62b9a749b232d91fe06f573b20-full.jpg", "weight" => 1500,  "color" => "#A52A2A", "width" => "300", "height" => "600", "quantity" => "15", "category" => "mammal", "category" => "none");
print generic_insert("products", $val)."\n";
$val = array("product_name" => "Honeybager", "price" => 322.1, "description" => "Медоеду не похер, у него нет дома. Помоги медоеду", "picture_link" => "https://cdn1.savepice.ru/uploads/2019/5/5/67404c0d69ecff5859be102a72da137e-full.jpg", "weight" => 1200,  "color" => "#000000", "width" => "310", "height" => "650", "quantity" => "9", "category" => "mammal", "category" => "none");
print generic_insert("products", $val)."\n";
$val = array("product_name" => "Beavers", "price" => 1199, "description" => "Бобры подготовили достаточно материала на новый улетный альбом, продаются группой", "picture_link" => "https://cdn1.savepice.ru/uploads/2019/5/5/16ad5cd0e1068f1d7a10b7bb0141f036-full.jpg", "weight" => 4900,  "color" => "#A52A2A", "width" => "4000", "height" => "800", "quantity" => "1", "category" => "mammal", "category" => "rodents");
print generic_insert("products", $val)."\n";
$val = array("product_name" => "Squirrel", "price" => 590.0, "description" => "От инсайдеров слышали - белка летает. Сами не проверяли", "picture_link" => "https://cdn1.savepice.ru/uploads/2019/5/5/4a28fc270861a8e167e124e37204334a-full.jpg", "weight" => 150,  "color" => "#A52A2A", "width" => "120", "height" => "120", "quantity" => "55", "category" => "rodents", "category" => "bird");
print generic_insert("products", $val)."\n";
