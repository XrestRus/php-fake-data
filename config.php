<?php

//Разработка
// define('HOST', 'localhost');
// define('USER', 'root');
// define('PASSWORD', 'root');
// define('DATABASENAME', 'fake_db');

$url = parse_url(getenv("CLEARDB_CYAN_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

define('HOST', $server);
define('USER', $username);
define('PASSWORD', $password);
define('DATABASENAME', $db);
