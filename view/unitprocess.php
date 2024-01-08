<?php
include "../controller/dbConnection.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['unitId'])) {
    // Sanitize and set the session variable
    $_SESSION['unitId'] = filter_var($_POST['unitId'], FILTER_SANITIZE_STRING);

    // Fetch unit details based on the received unitId
    $unitDetails = fetchUnitDetails($_SESSION['unitId']);

    // Respond to the client with unit details (in JSON format)
    echo json_encode($unitDetails);

    $_SESSION['unit_edit'] = true;
} else {
    // Handle invalid requests
    echo 'Invalid request';
}

function fetchUnitDetails($unitId) {
    // Use the global keyword to access the global $db2 variable
    global $db2;

    // Perform the database query or any other action to fetch details
    // Adjust the following lines based on your actual database and query
    $query = $db2->prepare("SELECT * FROM unit WHERE id = :unitId");
    $query->execute(['unitId' => $unitId]);
    $unitDetails = $query->fetch(PDO::FETCH_ASSOC);

    return $unitDetails;
}
?>
