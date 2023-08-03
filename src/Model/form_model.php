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
    }
}
