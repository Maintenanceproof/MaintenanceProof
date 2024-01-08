<?php 
session_start();

include "../model/DBManager.class.php";
include "../controller/dbConnection.php";

 if (isset($_SESSION['valid']) == true) {

 	$_SESSION['property_edit'] = false ;
    $_SESSION['propertyId'] = null;
    $_SESSION['unit_edit'] = false ;
    $_SESSION['unitId'] = null;
 
    $current_user_name      = $_SESSION['user_name'] ;
    $current_user_id        = $_SESSION['user_id'];
    $current_password       = $_SESSION['user_password'];
    $current_user_type      = $_SESSION['user_type'];
    $current_user_email     = $_SESSION['user_email'];
    $current_user_status    = $_SESSION['user_status'];


    
    		$user_id            = "" ;
            $propertyName       = "" ;
            $floor              = "" ;
            $location           = "" ;
            $emplacement        = "" ;
            $assetName          = "" ;
            $buildingComponent  = "" ;
            $assetType          = "" ;
            $modelNumber        = "" ;
            $assetStatus        = "" ;
            $relationship       = "" ;
            $image              = "" ;
            $warranty           = "" ;
            $installationDate   = "" ;
            $warrantyInfo       = "" ;
            $purchaseDate       = "" ;
            $serialNumber       = "" ;
            $lastMaintenanceDate = "" ;
            $maintenanceRecords = "" ;
            $manufacturer       = "" ;
            $supplier           = "" ;
            $supplierContact    = "" ;
            $lifeExpectancy     = "" ;
            $depreciation       = "" ;
            $purchaseCost       = "" ;
            $currentValue       = "" ;
            $maintenanceRep     = "" ;
            $maintenanceRepDate = "" ;
            $notes              = "" ;
            $status             = "" ;
		    		  
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
                    <span class="name">Equipment</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="property.php" class="link submenu-title text-decoration-none"><i class='bx bx-buildings'></i><span>Propriété</span></a>
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
                    <a href="equipment.php" class="btn btn-warning ms-3" >Equipment List</a>
                </div>
            </nav>
        </div>
            
        <div class="affichage">
        </div>
        <div class="row" id="row">
        	<div class="col-sm-12" id="detail" style="width: 93%;margin-left: 50px;">
                <div class="card bg-transparent">
                            <div class="card-body">
                                <div class="prophead">
                                    <h5 class="card-title">Equipment Details</h5>
                                    
                                </div>
                                <div class="scroller">
                                    <div class="card" style="width: 100%;">
                                        <div class="card-body ">

    <form enctype="multipart/form-data" action="../controller/EquipmentController.php" method="POST">
    <table class="table table-bordered border-secondary" id="tbl">
        <tbody>
            <!-- Basic Information -->
            <tr>
                <td>Property Name :</td>
                <td> 
					  <select name="propertyName" id="propertyName">
                        <?php 

                            $query    = $db2->query( "SELECT id, user_id, propertyName, address, numberOfFloors, numberOfUnits, propertyImage, image1, image2, image3, image4, image5, length, breadth, height, depth, totalSquareFeet, currentValue, dateOfConstruction, buildingMaterialStructure, lastRenovationDate, propertyCertification, commonAreas, facilities, amenities, accessibility, securitySystem, accessControlSystem, parkingSpots, parkingFee, parkingAmount, parkingAmountMonthly, image, building_name, property_type, location, region, manager_id, land_breadth, land_length, square_feet, features_selection_list, building_certification, type_of_rent, rent, rate_per_square_feet, lease_date, status FROM property WHERE user_id = $current_user_id");
                            $properties     = $query->fetchAll( PDO::FETCH_ASSOC );

                            foreach ($properties as $property) {
                                ?>
                                    <option value="<?php echo $property['id'];?>"><?php echo $property['propertyName'];?></option>

                                <?php
                            }

                        ?>
					  </select>
                </td>
            </tr>
           <!--  <tr>
                <td>Floor</td>
                <td> 
                      <select name="floor" id="floor">
                        <?php 

                            $query    = $db2->query( "SELECT ID, Property_ID, block_id, Floor, status FROM add_floor WHERE Property_ID = $current_user_id");
                            $floors     = $query->fetchAll( PDO::FETCH_ASSOC );

                            foreach ($floors as $floor) {
                                ?>
                                    <option value="<?php echo $floor['id'];?>"><?php echo $floor['Floor'];?></option>

                                <?php
                            }

                        ?>
                      </select>
                </td>
            </tr> -->
            <tr>
                <td>Location</td>
                <td><input type="text" id="location" name="location" value="<?php echo $location;?>"></td>
            </tr>

          
            <tr>
                <td>Emplacement</td>
                <td><input type="text" id="emplacement" name="emplacement" value="<?php echo $emplacement;?>"></td>
            </tr>
            <tr>
                <td>Asset Name</td>
                <td><input type="text" name="assetName" id="assetName" value="<?php echo $assetName;?>"></td>
            </tr>
            <tr>
                <td>Building Component</td>
                <td><input type="text" name="buildingComponent" id="buildingComponent" value="<?php echo $buildingComponent;?>"></td>
            </tr>
            <tr>
                <td>Asset Type</td>
                <td><input type="text" name="assetType" id="assetType" value="<?php echo $assetType;?>"></td>
            </tr>
          
            <tr>
                <td>Model Number</td>
                <td><input type="text" name="modelNumber" id="modelNumber" value="<?php echo $modelNumber;?>"></td>
            </tr>
            <tr>
                <td>Asset Active</td>
                <td>
                    <select name="assetStatus" id="assetStatus">
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                        <option value="3">Out of Stock</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Relationship</td>
                <td><input type="text" name="relationship" id="relationship" value="<?php echo $relationship;?>"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td> <input type="file"  name="image" id="image"></td>
            </tr>
            <tr>
                <td>Installation Date</td>
                <td><input type="date" name="installationDate" id="installationDate" value="<?php echo $installationDate;?>"></td>
            </tr>
            <!-- Add more rows for other fields -->

            <!-- Financial Information -->
            <tr>
                <td>Warranty Info</td>
                <td><input type="text" name="warrantyInfo" id="warrantyInfo" value="<?php echo $warrantyInfo;?>"></td>
            </tr>

            <tr>
                <td>Purchase Date</td>
                <td><input type="date" name="purchaseDate" id="purchaseDate" value="<?php echo $purchaseDate;?>"></td>
            </tr>

            <tr>
                <td>Serial Number</td>
                <td><input type="text" name="serialNumber" id="serialNumber" value="<?php echo $serialNumber;?>"></td>
            </tr>
            <tr>
                <td>Last Maintenance Date</td>
                <td><input type="date" name="lastMaintenanceDate" id="lastMaintenanceDate" value="<?php echo $lastMaintenanceDate;?>"></td>
            </tr>
            <tr>
                <td>Manufacturer</td>
                <td>
                    <select name="manufacturer" id="manufacturer">
                        <option value="1">Manufacturer 1</option>
                        <option value="2">Manufacturer 2</option>
                        <option value="3">Manufacturer 3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Supplier</td>
                <td>
                    <select name="supplier" id="supplier">
                        <option value="1">Vendor 1</option>
                        <option value="2">Vendor 2</option>
                        <option value="3">Vendor 3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Supplier Contact</td>
                <td><input type="text" name="supplierContact" id="supplierContact" value="<?php echo $supplierContact;?>"></td>
            </tr>
            <tr>
                <td>Life Expectancy</td>
                <td><input type="text" name="lifeExpectancy" id="lifeExpectancy" value="<?php echo $lifeExpectancy;?>"></td>
            </tr>
            <tr>
                <td>Purchase Cost</td>
                <td><input type="text" name="purchaseCost" id="purchaseCost" value="<?php echo $purchaseCost;?>"></td>
            </tr>
            <tr>
                <td>Current Value</td>
                <td><input type="text" name="currentValue" id="currentValue" value="<?php echo $currentValue;?>"></td>
            </tr>
            <tr>
                <td>Notes</td>
                <td><input type="text" name="notes" id="notes" value="<?php echo $notes;?>"></td>
            </tr>

            
            <!-- Add more rows for other fields -->
        </tbody>
    </table>
    <input type="hidden" name="user_id" id="user_id" value="<?php echo $current_user_id;?>">
<input type="submit" id="Add_equipment" name="Add_equipment" value="+ Equipment">


    
    
</form>
	</div>
</div></div></div></div></div></div>
        </div>
       
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    </section>
</body>
</html>
