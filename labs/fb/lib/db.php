<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'hengkiar_test');
define('DB_PASSWORD', 'test123123');
define('DB_DATABASE', 'hengkiar_test');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
mysql_query ("set character_set_results='utf8'");   
?>
