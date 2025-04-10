<?php
header('Content-Type: application/json');

// Include database connection file
include '../../includes/db.inc.php';

// Fetch countries
$result = $connection->query("SELECT id, name FROM countries");
$countries = $result->fetch_all(MYSQLI_ASSOC);

// Return JSON response
echo json_encode($countries);
?>
