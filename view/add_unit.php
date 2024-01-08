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


    
    		$id 			      = "";
    		$propertyName	      = "";
    		$unitNumber		      = "";
    		$unitType		      = "";
    		$floorNumber	      = "";
    		$address		      = "";
    		$occupied		      = "";
		    $unitImage	          = "";
		    $image1		          = "";
		    $image2		          = "";
		    $image3			      = "";
		    $image4				  = "";
		    $image5			      = "";
		    $length	              = "";
		    $breadth			  = "";	   
		    $total_area		      = "";
		    $number_of_bedroom    = "";
		    $number_of_bathroom   = "";
		    $number_of_windows	  = "";
		    $furnished		      = "";
		    $equiped_with	      = "";
		    $unit_feature         = "";
		    $camion_size	      = "";
		    $type_of_heating      = "";
		    $description	      = "";
		    $purchase_price	      = "";
		    $mortgage_balance	  = "";
		    $monthly_mortgage	  = "";
		    $property_tax	      = "";
		    $unit_name		      = "";
		    $unit_status	      = "";
		  
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
                    <span class="name">Unit</span>
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
            <div class="text">Unit</div>
        </div>
        <div class="position-absolute top-0 end-0">
            <nav class="navbar bg-transparent">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit"><i class='bx bx-search'></i></button>
                    </form>
                    <a href="unit.php" class="btn btn-warning ms-3" >Unit List</a>
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
        	<div class="col-sm-12" id="detail" style="width: 93%;margin-left: 50px;">
                <div class="card bg-transparent">
                            <div class="card-body">
                                <div class="prophead">
                                    <h5 class="card-title">Unit Details</h5>
                                    
                                </div>
                                <div class="scroller">
                                    <div class="card" style="width: 100%;">
                                        <div class="card-body ">

    <form enctype="multipart/form-data" action="../controller/UnitController.php" method="POST">
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
            </tr>
            <tr>
                <td>Unit Number</td>
                <td><input type="text" id="unitNumber" name="unitNumber" value="<?php echo $unitNumber;?>"></td>
            </tr>
            <tr>
                <td>Unit Type</td>
                <td><input type="text" id="unitType" name="unitType" value="<?php echo $unitType;?>"></td>
            </tr>

            <!-- Property Details -->
            <tr>
                <td>Floor Number</td>
                <td><input type="text" id="floorNumber" name="floorNumber" value="<?php echo $floorNumber;?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" id="address" value="<?php echo $address;?>"></td>
            </tr>
            <tr>
                <td>Occupied</td>
                <td>
                    <input type="checkbox" id="occupied" name="occupied" value="Yes" <?php if($occupied == "Yes") echo 'checked'; ?>><label style="margin-left: -25%;" for="occupied"> Yes</label>
                </td>
            </tr>
            <tr>
                <td>Unit Image</td>
                <td> <input type="file"  name="unitImage" id="unitImage"></td>
            </tr>
            <tr>
                <td>Image 1</td>
                <td><input type="file"  name="image1" id="image1"></td>
            </tr>
            <tr>
                <td>Image 2</td>
                <td><input type="file"  name="image2" id="image2"></td>
            </tr>
            <tr>
                <td>Image 3</td>
                <td><input type="file"  name="image3" id="image3"></td>
            </tr>
            <tr>
                <td>Image 4</td>
                <td><input type="file"  name="image4" id="image4"></td>
            </tr>
            <tr>
                <td>Image 5</td>
                <td><input type="file"  name="image5" id="image5"></td>
            </tr>
            <tr>
                <td>Length</td>
                <td><input type="number" name="length" id="length" value="<?php echo $length;?>"></td>
            </tr>
            <tr>
                <td>Breadth</td>
                <td><input type="number" name="breadth" id="breadth" value="<?php echo $breadth;?>"></td>
            </tr>
            <tr>
                <td>Total Area</td>
                <td><input type="number" name="total_area" id="total_area" value="<?php echo $total_area;?>"></td>
            </tr>
            <tr>
                <td>Number of Bedrooms</td>
                <td><input type="number" name="number_of_bedroom" id="number_of_bedroom" value="<?php echo $number_of_bedroom;?>"></td>
            </tr>
            <tr>
                <td>Number of Bathrooms</td>
                <td><input type="number" name="number_of_bathroom" id="number_of_bathroom" value="<?php echo $number_of_bathroom;?>"></td>
            </tr>
            <!-- Add more rows for other fields -->

            <!-- Financial Information -->
            <tr>
                <td>Number of Windows</td>
                <td><input type="number" name="number_of_windows" id="number_of_windows" value="<?php echo $number_of_windows;?>"></td>
            </tr>

            <tr>
                <td>Furnished</td>
                <td><input type="checkbox" id="furnished" name="furnished" value="Yes" <?php if($furnished == "Yes") echo 'checked'; ?>><label style="margin-left: -25%;"  for="furnished"> Yes</label></td>
            </tr>

            <tr>
                <td>Equipped With</td>
                <td><input type="text" name="equiped_with" id="equiped_with" value="<?php echo $equiped_with;?>"></td>
            </tr>

            <tr>
                <td>Unit Feature</td>
                <td><input type="text" name="unit_feature" id="unit_feature" value="<?php echo $unit_feature;?>"></td>
            </tr>

            <tr>
                <td>Camion Size</td>
                <td><input type="text" name="camion_size" id="camion_size" value="<?php echo $camion_size;?>"></td>
            </tr>

            <tr>
                <td>Type of Heating</td>
                <td><input type="text" name="type_of_heating" id="type_of_heating" value="<?php echo $type_of_heating;?>"></td>
            </tr>

            <tr>
                <td>Description</td>
                <td><input type="text" name="description" id="description" value="<?php echo $description;?>"></td>
            </tr>

            <tr>
                <td>Purchase Price</td>
                <td><input type="number" name="purchase_price" id="purchase_price" value="<?php echo $purchase_price;?>"></td>
            </tr>

            <tr>
                <td>Mortgage Balance</td>
                <td><input type="number" name="mortgage_balance" id="mortgage_balance" value="<?php echo $mortgage_balance;?>"></td>
            </tr>

            <tr>
                <td>Monthly Mortgage</td>
                <td><input type="number" name="monthly_mortgage" id="monthly_mortgage" value="<?php echo $monthly_mortgage;?>"></td>
            </tr>

            <tr>
                <td>Property Tax</td>
                <td><input type="number" name="property_tax" id="property_tax" value="<?php echo $property_tax;?>"></td>
            </tr>

            <tr>
                <td>Unit Name</td>
                <td><input type="text" name="unit_name" id="unit_name" value="<?php echo $unit_name;?>"></td>
            </tr>

            <tr>
                <td>Unit Status</td>
                <td><input type="text" name="unit_status" id="unit_status" value="<?php echo $unit_status;?>"></td>
            </tr>
            
            
            <!-- Add more rows for other fields -->
        </tbody>
    </table>
    <input type="hidden" name="user_id" id="user_id" value="<?php echo $current_user_id;?>">
<input type="submit" id="Add_unit" name="Add_unit" value="+ Unit">


    
    
</form>
	</div>
</div></div></div></div></div></div>
        </div>
       
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    </section>
</body>
</html>
