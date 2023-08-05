<?php

require_once realpath("../vendor/autoload.php");

use src\view\Index;

$displayContent = new Index();
$displayContent->renderEdit();

