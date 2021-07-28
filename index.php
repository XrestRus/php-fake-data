<?php

include_once './bootstrap.php';

use Controllers\TableDataController;

header('Access-Control-Allow-Origin: *');

print (new TableDataController())->index();
