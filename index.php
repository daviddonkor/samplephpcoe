<?php

require_once __DIR__."\app\bootstrap.php";

use App\Humans\Staff\Faculty\Faculty;
use App\Connections\PDOConnection\PDOConnector;
$f = new Faculty();
echo $f->lectures();

$con = PDOConnector::getInstance();
