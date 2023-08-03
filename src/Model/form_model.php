<?php

// use src/model/databse;

class form_model
{
    public function addData($title, $description)
    {
        // Create a connection to the Database
        $database = new Database();
        $pdo = $database->pdo();

        // Prepares the SQL query using named placeholders
        $sql = "INSERT INTO lists (title, description, date) VALUES (:title, :description, :date)";
        $statement = $pdo->prepare($sql);

        // Bind the parameters to the named placeholders
        $statement->bindParam(':title', $title, PDO::PARAM_STR);
        $statement->bindParam(':description', $description, PDO::PARAM_STR);
        $statement->bindParam(':date', $date, PDO::PARAM_STR);

        // Execute the query
        $statement->execute();
    }

    public function deleteData()
    {
    }

    public function editData()
    {
    }

    public function displayData()
    {
    }
}
