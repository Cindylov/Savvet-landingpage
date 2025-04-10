<?php
header('Content-Type: application/json');

// Include database connection file
include '../../includes/db.inc.php';

$result = $connection->query("SELECT domain FROM emails");
$emails = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($emails);
?>