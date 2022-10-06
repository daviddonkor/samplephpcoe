<?php

require_once __DIR__."\app\bootstrap.php";

use App\Humans\Staff\Faculty\Faculty;
use App\Connections\PDOConnection\PDOConnector;
$f = new Faculty();
echo $f->lectures();

$conn = PDOConnector::getInstance();
$con = $conn->getConnection();
$rs = $con->prepare("select * from students limit 10");
$rs->execute();
$rm = $rs->fetchAll(PDO::FETCH_ASSOC);

foreach ($rm as $r) {
    echo $r['indexnumber'] . PHP_EOL;
}