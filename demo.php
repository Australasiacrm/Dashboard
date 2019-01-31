<?php

define('DB_NAME', 'form');
define('DB_USER', 'root');
define('DB_PASSWORD', ' ');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
   dies('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
    die('Can\'t use' . DB_NAME . ': '. mysql_error());
}

$value = $_POST['input1'];
$sql = "INSERT INTO demo (input1) VALUES ('$values')";

if (mysql_query($sql)) {
   die('Error: ' . mysql_error());
}


mysql_close();
?>

