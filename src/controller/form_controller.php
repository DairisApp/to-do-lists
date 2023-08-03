<?php
date_default_timezone_set('Europe/Riga');

class FormController
{
    public function saveNewItems()
    {
        // Assing the variable corresponding values
        $title = $_POST["title"];
        $description = $_POST["description"];
        $date = date('Y-m-d H:i:s');

        //Call model method that rqeuires variable to be added to the database
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $call = new FormController;
    $call->saveNewItems();
}
