<?php

namespace src\model;

use src\model\Databse;
use PDO;

class Model
{
    public function addData($title, $description, $date)
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

    public function deleteData($id)
    {
        // Create a connection to the Database
        $database = new Database();
        $pdo = $database->pdo();

        // Prepare the SQL query using a placeholder for id
        $sql = "DELETE FROM lists WHERE id = :id";
        $statement = $pdo->prepare($sql);

        // Bind the parameter to the placeholder of id
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        $statement->execute();
    }

    public function editData($id, $title, $description)
    {
         // Create a connection to the Database
         $database = new Database();
         $pdo = $database->pdo();

         // Prepare the SQL query using placeholders for values
         $sql ="UPDATE lists SET title = :title, description = :description WHERE id =:id";
         $statement = $pdo->prepare($sql);

          // Bind the parameter to the placeholder od respective variables
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':title', $title, PDO::PARAM_STR);
        $statement->bindParam(':description', $description, PDO::PARAM_STR);

        $statement->execute();
    }

    public function displayData()
    {
        $database = new Database();
        $pdo = $database->pdo();
    
        // Retrieve data from the "lists" table
        $sql = "SELECT * FROM lists";
        $statement = $pdo->prepare($sql);
        $statement->execute();
    
        // Fetch's all rows as an associative array and returns them as $items
        $items = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $items;
    }
}
