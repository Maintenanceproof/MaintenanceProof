<?php
include "../controller/dbConnection.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['inventoryId'])) {
    // Sanitize and set the session variable
    $_SESSION['inventoryId'] = filter_var($_POST['inventoryId'], FILTER_SANITIZE_STRING);

    // Fetch unit details based on the received inventoryId
    $inventoryDetails = fetchInventoryDetails($_SESSION['inventoryId']);

    // Respond to the client with unit details (in JSON format)
    echo json_encode($inventoryDetails);

    $_SESSION['inventory_edit'] = true;
} else {
    // Handle invalid requests
    echo 'Invalid request';
}

function fetchInventoryDetails($inventoryId) {
    // Use the global keyword to access the global $db2 variable
    global $db2;

    // Perform the database query or any other action to fetch details
    // Adjust the following lines based on your actual database and query
    $query = $db2->prepare("SELECT * FROM inventory WHERE id = :inventoryId");
    $query->execute(['inventoryId' => $inventoryId]);
    $inventoryDetails = $query->fetch(PDO::FETCH_ASSOC);

    return $inventoryDetails;
}
?>
