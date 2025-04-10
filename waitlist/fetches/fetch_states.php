<?php
header('Content-Type: application/json');

$countryId = $_GET['country_id'];

// Include database connection file
include '../../includes/db.inc.php';

// Fetch states for the selected country
$result = $connection->query("SELECT id, name FROM states WHERE country_id = '$countryId'");
$states = $result->fetch_all(MYSQLI_ASSOC);

// Return JSON response
echo json_encode($states);
?>