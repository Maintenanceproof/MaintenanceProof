<?php
include "../controller/dbConnection.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['equipmentId'])) {
    // Sanitize and set the session variable
    $_SESSION['equipmentId'] = filter_var($_POST['equipmentId'], FILTER_SANITIZE_STRING);

    // Fetch unit details based on the received equipmentId
    $equipmentDetails = fetchEquipmentDetails($_SESSION['equipmentId']);

    // Respond to the client with unit details (in JSON format)
    echo json_encode($equipmentDetails);

    $_SESSION['equipment_edit'] = true;
} else {
    // Handle invalid requests
    echo 'Invalid request';
}

function fetchEquipmentDetails($equipmentId) {
    // Use the global keyword to access the global $db2 variable
    global $db2;

    // Perform the database query or any other action to fetch details
    // Adjust the following lines based on your actual database and query
    $query = $db2->prepare("SELECT * FROM assets WHERE id = :equipmentId");
    $query->execute(['equipmentId' => $equipmentId]);
    $equipmentDetails = $query->fetch(PDO::FETCH_ASSOC);

    return $equipmentDetails;
}
?>
