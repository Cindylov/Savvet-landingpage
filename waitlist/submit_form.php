<?php
session_start();

// Get protocol (http or https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

// Get the host name
$host = $_SERVER['HTTP_HOST'];

// Get the base URL with /waitlist
$form_url = $protocol . '://' . $host . '/savvet-landingpage/waitlist';

// Include database connection
require_once '../includes/db.inc.php';

// Initialize variables
$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and validate form data
    $emailUsername = trim($_POST['emailUsername'] ?? '');
    $emailDomain = trim($_POST['emailDomain'] ?? '');
    $fullName = trim($_POST['fullName'] ?? '');
    $occupation = trim($_POST['occupation'] ?? '');
    $countryId = trim($_POST['countryId'] ?? '');
    $stateId = trim($_POST['stateId'] ?? '');
    $vettorType = trim($_POST['vettorType'] ?? '');
    $age = trim($_POST['age'] ?? '');

    // Validate each field
    if (empty($emailUsername)) {
        $errors['email'] = 'Email is required';
    }elseif (!filter_var($emailUsername, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }
    
    if (empty($fullName)) {
        $errors['fullName'] = 'Name is required';
    }
    if (empty($occupation)) {
        $errors['occupation'] = 'Occupation is required';
    }
    if (empty($countryId)) {
        $errors['countryId'] = 'Please select your Country';
    }
    if (empty($stateId)) {
        $errors['stateId'] = 'Please select your State';
    }
    if (empty($vettorType)) {
        $errors['vettorType'] = 'Please select a Vettor Type';
    }
    if (empty($age)) {
        $errors['age'] = 'Please choose an Age Range';
    }

    // If there are no validation errors, check if the email already exists
    if (empty($errors)) {
        $email = $emailUsername;
        $checkStmt = $connection->prepare("SELECT id FROM vettors WHERE email = ?");
        $checkStmt->bind_param('s', $email);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            $errors['email'] = 'Email already joined waitlist';
        } else {
            // Insert data into the database
            $stmt = $connection->prepare("INSERT INTO vettors (email, full_name, occupation, country_id, state_id, vettor_type, age) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param('sssssss', $email, $fullName, $occupation, $countryId, $stateId, $vettorType, $age);

            if ($stmt->execute()) {
                $success = true;
                $_SESSION['success'] = true;

                $stmt->close();
            }
        }
        $checkStmt->close();
    }

    // Store errors and previous input data in session
    $_SESSION['errors'] = $errors;
    $_SESSION['previous'] = [
        'emailUsername' => $emailUsername,
        'emailDomain' => $emailDomain,
        'fullName' => $fullName,
        'occupation' => $occupation,
        'countryId' => $countryId,
        'stateId' => $stateId,
        'vettorType' => $vettorType,
        'age' => $age,
    ];

    // Redirect back to the form page
    header('Location: ' . $form_url);
    exit;
}
?>
