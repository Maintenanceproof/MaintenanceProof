<?php
include "../controller/dbConnection.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['propertyId'])) {
    // Sanitize and set the session variable
    $_SESSION['propertyId'] = filter_var($_POST['propertyId'], FILTER_SANITIZE_STRING);

    // Fetch property details based on the received propertyId
    $propertyDetails = fetchPropertyDetails($_SESSION['propertyId']);
    $unitDetails = fetchUnitDetails($_SESSION['propertyId']);
    $floorDetails = fetchFloorDetails($_SESSION['propertyId']);

    // Combine property and unit details into a single array
    $response = [
        'propertyDetails' => $propertyDetails,
        'unitDetails' => $unitDetails,
        'floorDetails' => $floorDetails,
    ];

    // Respond to the client with details (in JSON format)
    echo json_encode($response);

    $_SESSION['property_edit'] = true;
} else {
    // Handle invalid requests
    echo 'Invalid request';
}

function fetchPropertyDetails($propertyId) {
    global $db2;

    try {
        $query = $db2->prepare("SELECT * FROM property WHERE id = :propertyId");
        $query->execute(['propertyId' => $propertyId]);
        $propertyDetails = $query->fetch(PDO::FETCH_ASSOC);

        return $propertyDetails;
    } catch (PDOException $e) {
        // Handle database errors (log or respond with an error message)
        return null;
    }
}

function fetchUnitDetails($propertyId) {
    global $db2;

    try {
        $query = $db2->prepare("SELECT * FROM unit WHERE property_id = :propertyId");
        $query->execute(['propertyId' => $propertyId]);
        $unitDetails = $query->fetch(PDO::FETCH_ASSOC);

        return $unitDetails;
    } catch (PDOException $e) {
        // Handle database errors (log or respond with an error message)
        return null;
    }
}

function fetchFloorDetails($propertyId) {
    global $db2;

    try {
        $query = $db2->prepare("SELECT * FROM add_floor WHERE property_id = :propertyId");
        $query->execute(['propertyId' => $propertyId]);
        $floorDetails = $query->fetch(PDO::FETCH_ASSOC);

        return $floorDetails;
    } catch (PDOException $e) {
        // Handle database errors (log or respond with an error message)
        return null;
    }
}
?>
