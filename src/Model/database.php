<?php

// Replace these
$host = 'your_host_name_or_ip';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database_name';

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check for a connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}