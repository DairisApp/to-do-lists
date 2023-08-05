<?php

namespace src\controller;

use src\model\Model;



class Controller
{
    public function saveNewItems()
    {
        // Assing the variable corresponding values
        date_default_timezone_set('Europe/Riga');
        $title = $_POST["title"];
        $description = $_POST["description"];
        $date = date('Y-m-d H:i:s');

        $saveItems = new Model();
        $saveItems->addData($title, $description, $date);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $call = new Controller;
    $call->saveNewItems();
}
