<?php

require_once realpath("../vendor/autoload.php");

use src\view\Index;

$displayIdenx = new Index();
$displayIdenx->renderItems();

