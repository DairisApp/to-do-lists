<?php

    class FormController
    {
        public function saveNewItems()
        {
            $title = $_POST["title"];
            $description = $_POST["description"];

            //Call model method that rqeuires variable to be added to the database
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $call = new FormController;
        $call->saveNewItems();

    }
    
