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


    $query    = $db2->query( "SELECT id, user_id, propertyId, floor, location, emplacement, assetName, buildingComponent, assetType, modelNumber, assetStatus, relationship, image, warranty, installationDate, warrantyInfo, purchaseDate, serialNumber, lastMaintenanceDate, maintenanceRecords, manufacturer, supplier, supplierContact, lifeExpectancy, depreciation, purchaseCost, currentValue, maintenanceRep, maintenanceRepDate, notes, status FROM assets WHERE user_id = $current_user_id");
    $assets     = $query->fetchAll( PDO::FETCH_ASSOC );

    $_SESSION['property_edit'] = false ;
    $_SESSION['propertyId'] = null;

    $_SESSION['unit_edit'] = false ;
    $_SESSION['unitId'] = null;

    $_SESSION['inventory_edit'] = false ;
    $_SESSION['inventoryId'] = null;

    $_SESSION['equipment_edit'] = false ;
    $_SESSION['equipmentId'] = null;

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
                    <span class="name">Equipment</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="property.php" class="link submenu-title text-decoration-none"><i class='bx bx-buildings'></i><span>Propriété</span></a>
                    <a href="floor.php" class="link text-decoration-none"><i class='bx bx-building'></i><span>Floor</span></a>
                    <a href="unit.php" class="link text-decoration-none"><i class='bx bx-building'></i><span>Unités</span></a>
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
                    <a href="equipment.php" class="link submenu-title text-decoration-none"><i class='bx bxs-door-open'></i><span>Équipements</span></a>
                    <a href="inventory.php" class="link text-decoration-none"><i class='bx bx-barcode-reader'></i><span>Inventaires</span></a>
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
            <div class="text">Equipment</div>
        </div>
        <div class="position-absolute top-0 end-0">
            <nav class="navbar bg-transparent">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit"><i class='bx bx-search'></i></button>
                    </form>
                    <a href="add_equipment.php" class="btn btn-warning ms-3" >+ Equipment</a>
                </div>
            </nav>
        </div>
            
        <div class="affichage">
        </div>
        <div class="row" id="row">
            <div class="col-sm-6 mb-2 mb-sm-0" id="toutes">
                <div class="card bg-transparent">
                    <div class="card-body">
                        <h5 class="card-title">All Equipment</h5>
                           <div class="scroller">
                                <?php foreach ($assets as $asset) { ?>
                                    <form>
                                        <a href="#" onclick="clickProperty(event)" class="text-decoration-none">
                                            <div class="card mb-3 bg-transparent" style="max-width: 540px;">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <?php  
                                                            $img = $asset['image'];
                                                            if($img == null){
                                                                $img = "../controller/UnitImage/no_building.jpg";
                                                            }else{
                                                                $img = "../controller/".$img;
                                                            }
                                                        ?>
                                                        <img src="<?php echo $img;?>" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title" name=""><?php echo $asset['assetName']; ?></h5>
                                                            <?php
                                                                $p_i_id =  $asset['propertyId'];
                                                                $query3 = $db2->query( "SELECT propertyName FROM property WHERE id = $p_i_id");
                                                                $p_roperty = $query3->fetchAll( PDO::FETCH_ASSOC );

                                                                foreach($p_roperty as $p){
                                                                    ?>
                                                                    <p class="card-text" name=""><b>Property : </b> <?php echo $p['propertyName']; ?></p>
                                                                    <?php
                                                                }
                                                            ?>
                                                            
                                                            <!-- Use id="equipment_id" for the hidden paragraph -->
                                                            <p style="display: none;" id="equipment_id"><?php echo $asset['id']; ?></p>
                                                            <p style="display: none;" id="property_id"><?php echo $asset['propertyId']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </form>
                                <?php } ?>
                            <script>
    // Add a click event handler to the card element
    function clickProperty(event) {
        // Prevent the default link behavior
        event.preventDefault();

        // Retrieve the property ID from the hidden paragraph using id
        var equipmentId = event.currentTarget.querySelector('#equipment_id').innerText;

        var propertyId = event.currentTarget.querySelector('#property_id').innerText;
        // Use AJAX to send equipmentId to the server
        $.ajax({
            type: 'POST',
            url: 'equipmentprocess.php', // Replace with the actual server-side processing script
            data: { equipmentId: equipmentId },
            dataType: 'json', // Expect JSON response
            success: function(response) {
                // Handle the server's response
                console.log(response);

                // Update HTML elements with fetched data (adjust as needed)
                
                document.getElementById("e_n").innerText                    = response.assetName;     
                document.getElementById("m_n").innerText                    = response.modelNumber;
                document.getElementById("s_n").innerText                    = response.serialNumber;
                if(response.assetStatus == "1"){
                    document.getElementById("e_s").innerText              = "Yes";
                } 
                if(response.assetStatus == "2"){
                    document.getElementById("e_s").innerText              = "No";
                } 
                if(response.assetStatus == "3"){
                    document.getElementById("e_s").innerText              = "Out of Stock";
                }     
                document.getElementById("i_d").innerText                  = response.installationDate; 
                document.getElementById("n").innerText                    = response.notes; 
                // Assuming 'response.image' contains the filename or path to the image
                var imageUrl = "../controller/" + response.image;

                if( response.image != null){
                // Get the image element by ID
                var imageElement = document.getElementById("e_image");

                // Set the src attribute of the image element
                imageElement.setAttribute("src", imageUrl);

                // Make the image visible by changing its style display property
                imageElement.style.display = "block"; // or "inline" or "inline-block" depending on your layout needs
                }

                document.getElementById("l_e").innerText      = response.lifeExpectancy;     
                document.getElementById("c").innerText        = response.purchaseCost;
                document.getElementById("c_v").innerText      = response.currentValue;     
               
               
            },
            error: function() {
                alert('Error occurred during the AJAX request.');
            }
        });

         // Use AJAX to send propertyId to the server
        $.ajax({
            type: 'POST',
            url: 'process.php', // Replace with the actual server-side processing script
            data: { propertyId: propertyId },
            dataType: 'json', // Expect JSON response
            success: function(response) {
                // Handle the server's response
                console.log(response);

                // Update HTML elements with fetched data (adjust as needed)
                document.getElementById("e_building_name").innerText  = response.propertyDetails.propertyName;
            },
            error: function() {
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
                                    <h5 class="card-title">Detail of Equipment</h5>
                                    <div>
                                        <button type="button" class="btn btn-warning show-form" onclick="edit()"><i class='bx bx-edit' ></i></button>
                                        <script type="text/javascript">
                                            function edit() {
                                                // Redirect to add_property.php
                                                window.location.href = 'edit_equipment.php';
                                            }
                                        </script>
                                        <button type="button" class="btn btn-warning"><i class='bx bx-trash'></i></button>
                                    </div>
                                </div>
                                <div class="scroller">
                                    <div class="card" style="width: 100%;">
                                        <div class="card-body">

                                              <table class = "table table-bordered border-secondary" id = "tbl">
             
                <tbody>
                 <tr>
                   <td>Name of Equipment</td>
                   <td id= "e_n"></td>
                 </tr>

                 <tr>
                   <td>Model Number</td>
                   <td id= "m_n"></td>
                 </tr>

                 <tr>
                   <td>Serial Number</td>
                   <td id= "s_n"></td>
                 </tr>

                 <tr>
                   <td>Installation Date</td>
                   <td id= "i_d"></td>
                 </tr>

                 <tr>
                   <td>Equipment Status</td>
                   <td id= "e_s"></td>
                 </tr>

                 <tr>
                   <td>Note</td>
                   <td id= "n"></td>
                 </tr>
                 
                </tbody>

                    </table>

                    <div class = "card mb-3" style = "max-width: 853px;">
                    <div class = "row g-0">
                    
                     <div class = "col-md-4">
                     <div class = "card-body">
                     <h6  class = "card-title">Image</h6>
                     
                      </div>
                      </div>
                    <div class = "col-md-8">
                    <img style="display:none;" id="e_image" src= "" class = "img-fluid rounded-start" alt = "...">
                     </div>
                     </div>
                    </div>
                    <h6    class = "card-title">Costings</h6>

<table class = "table table-bordered border-secondary" id = "tbl">

<tbody>
<tr>
<td>Life Expectancy</td>
<td id= "l_e"></td>
</tr>

<tr>
<td>Cost</td>
<td id= "c"></td>
</tr>

<tr>
<td>Current Value</td>
<td id= "c_v"></td>
</tr>



</tbody>

</table>





<h6    class = "card-title">Location</h6>
<table class = "table table-bordered border-secondary" id = "tbl">

<tbody>


<tr>
<td>Building</td>
<td id= "e_building_name"></td>
</tr>

</tbody>

</table>
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
