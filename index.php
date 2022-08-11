<?php

require_once __DIR__."\app\bootstrap.php";

use Humans\Staff\Faculty\Faculty;

$f = new Faculty();
echo $f->lectures();