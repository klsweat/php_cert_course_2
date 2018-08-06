<?php

// Get the connection instance
$pdo = new PDO('mysql:unix_socket=/var/run/mysqld/mysqld.sock;dbname=course', 'root', 'vagrant');

// Execute a one-off SQL statement and get a statement object
$stmt = $pdo->query('SELECT * FROM orders');

// Get a result set from the statement object
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Output the results
print_r($results);



