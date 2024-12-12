<?php

$name = 'World';

echo '<h1>Hello, ' . $name . '</h1>';

// Test database connection.
try {
    $dbh = new PDO('mysql:host=mysql;dbname=dev_db', 'user', 'secret');
    echo '<p>Database connection successful.</p>';
} catch (PDOException $e) {
    echo '<p>Database connection failed: ' . $e->getMessage() . '.</p>';
}
