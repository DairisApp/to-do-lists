<?php
class IndexView {
    public function renderItems($items) {
        // HTML template for displaying database information
        // Same content as index.html, but within a PHP method
        echo "<!DOCTYPE html>
        <html>
        <head>
            <title>My Database Information</title>
        </head>
        <body>
            <h1>Database Information</h1>
            <ul>";
        foreach ($items as $item) {
            echo "<li>
                    <strong>Title:</strong> {$item['title']}<br>
                    <strong>Description:</strong> {$item['description']}<br>
                    <strong>Date:</strong> {$item['date']}
                </li>";
        }
        echo "</ul>
        </body>
        </html>";
    }
}
