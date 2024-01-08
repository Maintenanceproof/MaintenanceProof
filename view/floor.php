<?php 
session_start();

include "../model/DBManager.class.php";
include "../controller/dbConnection.php";

 if (isset($_SESSION['valid']) == true) {


    $current_user_name      = $_SESSION['user_name'] ;
    $current_user_id        = $_SESSION['user_id'];
    $current_password       = $_SESSION['user_password'];
    $current_user_type      = $_SESSION['user_type'];
    $current_user_email     = $_SESSION['user_email'];
    $current_user_status    = $_SESSION['user_status'];


    $query    = $db2->query( "SELECT id, user_id, propertyType, propertyName, address, numberOfFloors, numberOfUnits, propertyImage, image1, image2, image3, image4, image5, length, breadth, height, depth, totalSquareFeet, currentValue, dateOfConstruction, buildingMaterialStructure, lastRenovationDate, propertyCertification, commonAreas, facilities, amenities, accessibility, securitySystem, accessControlSystem, parkingSpots, parkingFee, parkingAmount, parkingAmountMonthly, image, building_name, property_type, location, region, manager_id, land_breadth, land_length, square_feet, features_selection_list, building_certification, type_of_rent, rent, rate_per_square_feet, lease_date, status FROM property WHERE user_id = $current_user_id");
    $property     = $query->fetchAll( PDO::FETCH_ASSOC );

    // $query2    = $db2->query( "SELECT id FROM property WHERE user_id = $current_user_id");
    // $property2     = $query2->fetchAll( PDO::FETCH_ASSOC );

    // var_dump($property2);

    // $query2   = $db2->query( "SELECT id, property_id, block_id, floor, status FROM add_floor WHERE property_id = $property_id");
    // $floor     = $query2->fetchAll( PDO::FETCH_ASSOC );

    $_SESSION['property_edit'] = false ;
    $_SESSION['floor_edit'] = false ;
    $_SESSION['propertyId'] = null;

  }else{
    die("Page Not Available !");
  }

?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaintenanceProof</title>
    <!-- Box Icons  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Styles  -->
    <link rel="shortcut icon" href="assets/img/logo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    input[type=text],input[type=number],input[type=date],input[type=checkbox],select{
    background-color: darkgrey;
    border: none;
    margin: 8px 0;
    padding: 10px 15px;
    font-size: 13px;
    border-radius: 8px;
    width: 60%;
    outline: none;
    }

    input[type=text],input[type=number],input[type=date],input[type=checkbox],select{
      background-color: lightgrey;
    }
    input[type=submit]{
        background-color: #ffc107;
        color: #000000;
        font-size: 12px;
        padding: 10px 45px;
        border: 1px solid transparent;
        border-radius: 8px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-top: 10px;
        cursor: pointer;
    }

    input[type=submit]:hover{color: aliceblue;
    font-weight: bold;}

    </style>
</head>
<body>
    <div class="sidebar close">
        <!-- ========== Logo ============  -->
        <a href="#" class="logo-box text-decoration-none">
            <i class='' ><img src="assets/img/logo1.png" height="50px" width="65px"></i>
            <div class="logo-name">Maintenance Proof</div>
        </a>
        <!-- ========== List ============  -->
         <ul class="sidebar-list">
            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="dashboard.php" class="link text-decoration-none">
                    <i class='bx bx-grid-alt'></i>
                    <span class="name">Dashboard</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="dashboard.php" class="link submenu-title text-decoration-none">Dashboard</a>
                    <!-- submenu links here  -->
                </div>
            </li>
            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link text-decoration-none">
                    <i class='bx bx-buildings'></i>
                    <span class="name">Floor</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="property.php" class="link submenu-title text-decoration-none"><i class='bx bx-buildings'></i><span>Propriété</span></a>
                    <a href="floor.php" class="link text-decoration-none"><i class='bx bx-building'></i><span>Floor</span></a>
                    <a href="#" class="link text-decoration-none"><i class='bx bx-building'></i><span>Unités</span></a>
                    <a href="#" class="link text-decoration-none"><i class='bx bx-category'></i><span>Composantes</span></a>
                    <a href="#" class="link text-decoration-none"><i class='bx bx-traffic-cone'></i><span>Stationnements</span></a>
                </div>
            </li>
            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link text-decoration-none"><i class='bx bx-buildings'></i><span class="name">Actifs</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="equipement.php" class="link submenu-title text-decoration-none"><i class='bx bxs-door-open'></i><span>Équipements</span></a>
                    <a href="#" class="link text-decoration-none"><i class='bx bx-barcode-reader'></i><span>Inventaires</span></a>
                    <a href="#" class="link text-decoration-none"><i class='bx bx-package' ></i><span>Bons d'achat</span> </a>
                </div>
            </li>
            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link text-decoration-none">
                    <i class='bx bx-cog'></i>
                    <span class="name">Settings</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title text-decoration-none">Settings</a>
                    <a href="admin_portal.php" class="link submenu-title text-decoration-none">Portail adninistrateur</a>
                    <a href="cisco_meraki.php" class="link submenu-title text-decoration-none">Cisco/Meraki</a>
                    <a href="logout.php" class="link submenu-title text-decoration-none">Logout</a>
                    <!-- submenu links here  -->
                </div>
            </li>
        </ul>
    </div>
    
    <section class="home">
         <div class="toggle-sidebar">
            <i class='bx bx-menu'></i>
            <div class="text">Floor</div>
        </div>
        <div class="position-absolute top-0 end-0">
            <nav class="navbar bg-transparent">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit"><i class='bx bx-search'></i></button>
                    </form>
                    
                </div>
            </nav>
        </div>
            <form id="typeform" name="" style="max-width: 340px; margin-left:15px">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01"><i class='bx bx-chevron-down'></i></label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>Choisir le type de propriété</option>
                        <option value="1">Résidentiel</option>
                        <option value="2">Commercial</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning">Filtrer</button>
            </form>
        <div class="affichage">
        </div>
        <div class="row" id="row">
            <div class="col-sm-6 mb-2 mb-sm-0" id="toutes">
                <div class="card bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title">Propriétés</h5>
                           <div class="scroller">
                                <?php foreach ($property as $properties) { ?>
                                    <form>
                                        <a href="#" onclick="clickProperty(event)" class="text-decoration-none">
                                            <div class="card mb-3 bg-transparent" style="max-width: 540px;">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <?php  
                                                            $img = $properties['propertyImage'];
                                                            if($img == null){
                                                                $img = "../controller/PropertyImage/no_building.jpg";
                                                            }else{
                                                                $img = "../controller/".$img;
                                                            }
                                                        ?>
                                                        <img src="<?php echo $img;?>" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title" name=""><?php echo $properties['propertyName']; ?></h5>
                                                            <p class="card-text" name=""><?php echo $properties['address']; ?></p>
                                                            <!-- Use id="property_id" for the hidden paragraph -->
                                                            <p style="display: none;" id="property_id"><?php echo $properties['id']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </form>
                                <?php } ?>
                            <script>
    // Add a click event handler to the card element
   function clickProperty(event, sourceFile) {
    // Prevent the default link behavior
    event.preventDefault();

    // Retrieve the property ID from the hidden paragraph using id
    var propertyId = event.currentTarget.querySelector('#property_id').innerText;

    // Use AJAX to send propertyId to the server
    $.ajax({
        type: 'POST',
        url: 'floorprocess.php', // Replace with the actual server-side processing script
        data: { propertyId: propertyId, sourceFile: sourceFile },
        dataType: 'json', // Expect JSON response
        success: function (response) {
            // Handle the server's response
            console.log(response);

            // Update HTML elements with fetched data (adjust as needed)
            if (response.floor != null && response.floor !== "") {
                // Floors are present, show edit_form
                document.getElementById("edit_form").style.display = "block";
                document.getElementById("add_form").style.display = "none";

                // Update HTML elements with floor data
          
                document.getElementById("p_f").innerText = response.floor;
                // Add more code to update other elements if needed
            } else {
                // No floors, show add_form
                document.getElementById("edit_form").style.display = "none";
                document.getElementById("add_form").style.display = "block";
            }
        },
        error: function () {
            alert('Error occurred during the AJAX request.');
        }
    });
}

</script>

                            </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2" id="detail">
                <div class="card bg-transparent">
                            <div class="card-body">
                                <div class="prophead">
                                    <h5 class="card-title">Vue d'ensemble</h5>
                                    <div>
                                        
                                        <button type="button" class="btn btn-warning show-form" onclick="add()" id="add_b"><i class='bx bx-plus' ></i></button>
                                        <button type="button" class="btn btn-warning show-form" onclick="edit()" id="edit_b" style="display: none;"><i class='bx bx-edit' ></i></button>
                                        <script type="text/javascript">
                                            function add() {

                                                document.getElementById("edit_form").style.display = "none";
                                                document.getElementById("add_form").style.display = "block";
                                                document.getElementById("add_b").style.display = "none";
                                                document.getElementById("edit_b").style.display = "block";
                                            }
                                            function edit() {
                                                // Redirect to add_property.php
                                                document.getElementById("edit_form").style.display = "block";
                                                document.getElementById("add_form").style.display = "none";
                                                document.getElementById("add_b").style.display = "block";
                                                document.getElementById("edit_b").style.display = "none";
                                            }
                                        </script>
                                        <button type="button" class="btn btn-warning"><i class='bx bx-trash'></i></button>
                                    </div>
                                </div>
                                <div class="scroller">
                                    <div class="card" style="width: 100%;">
                                        <div class="card-body">
                                        <form id="edit_form" >     
                                            <table class="table table-bordered border-secondary" id="tbl">
                                                <tbody>
                                                                                                    
                                                    <tr>
                                                        <td>Floor</td>
                                                        <td id="p_f"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                        
                                        <form id="add_form" style="display:none;" action="../controller/FloorController.php" method="POST">
                                            <table class="table table-bordered border-secondary" id="tbl">
                                                <tbody>
                                                    <tr>
                                                        <td>Nom de la propriété</td>
                                                        <td>   
                                                          <select name="propertyName" id="propertyName">
                                                                <?php
                                                                foreach ($property as $properties) {   
                                                                ?>
                                                                    <option value="<?php echo $properties['id']; ?>">
                                                                        <?php echo $properties['propertyName']; ?>
                                                                    </option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                   
                                                    <tr>
                                                        <td>Floor</td>
                                                        <td>
                                                            <input type="number" name="floor_number" id="floor_number">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border-right: none;text-align: right;"><input type="submit" id="Add_floor" name="Add_floor" value="+ Floor"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
       
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    </section>
</body>
</html>
