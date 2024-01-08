<?php
include "../controller/dbConnection.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['propertyId'])) {
    // Sanitize and set the session variable
    $_SESSION['floorID'] = filter_var($_POST['propertyId'], FILTER_SANITIZE_STRING);
    

    // Fetch property details based on the received propertyId
    $floorDetails = fetchFloorDetails($_SESSION['floorID']);

    // Respond to the client with property details (in JSON format)
    echo json_encode($floorDetails);

    $_SESSION['floor_edit'] = true;
} else {
    // Handle invalid requests
    echo 'Invalid request';
}

function fetchFloorDetails($propertyId) {
    // Use the global keyword to access the global $db2 variable
    global $db2;

    // Perform the database query or any other action to fetch details
    // Adjust the following lines based on your actual database and query
    $query = $db2->prepare("SELECT id, property_id, block_id, floor, status FROM add_floor WHERE property_id = :propertyId");
    $query->execute(['propertyId' => $propertyId]);
    $floorDetails = $query->fetch(PDO::FETCH_ASSOC);

    return $floorDetails;
}
?>
