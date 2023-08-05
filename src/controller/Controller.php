<?php

namespace src\controller;

require_once realpath("../../vendor/autoload.php");

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

    public function updateItem()
    {
        // Assing the variable corresponding values
        date_default_timezone_set('Europe/Riga');
        $id = $_POST["item_id"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $date = date('Y-m-d H:i:s');

        $updateItem = new Model();
        $updateItem->editData($id, $title, $description, $date);
    }

    public function deleteItem()
    {
        $id = $_POST["item_id"];

        $delteItem = new Model();
        $delteItem->deleteData($id);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form-submit'])) {
    $call = new Controller;
    $call->saveNewItems();

    // Redirect back to index.php after processing the POST request
    header("Location: ../../public/index.php");
    exit();
    }
    
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form-update'])) {
    $call = new Controller;
    $call->updateItem();

    // Redirect back to index.php after processing the POST request
    header("Location: ../../public/index.php");
    exit();
    }

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form-delete'])) {
    $call = new Controller;
    $call->deleteItem();

    // Redirect back to index.php after processing the POST request
    header("Location: ../../public/index.php");
    exit();
    }
