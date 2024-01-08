<?php 
session_start();

include "../model/DBManager.class.php";
include "../controller/dbConnection.php";

 if (isset($_SESSION['valid']) == true) {

 	$_SESSION['property_edit'] = false ;
    $_SESSION['propertyId'] = null;
 
    $current_user_name      = $_SESSION['user_name'] ;
    $current_user_id        = $_SESSION['user_id'];
    $current_password       = $_SESSION['user_password'];
    $current_user_type      = $_SESSION['user_type'];
    $current_user_email     = $_SESSION['user_email'];
    $current_user_status    = $_SESSION['user_status'];


    
    		$id 						= "";
            $propertyCategory = "";
    		$propertyType				= "";
    		$propertyName				= "";
            $street = "";
            $city = "";
            $provinceState = "";
            $zipCode="";
            $country = "";
    		$address					= "";
    		$numberOfFloors				= "";
    		$numberOfUnits				= "";
    		$length						= "";
		    $breadth					= "";
		    $height						= "";
		    $depth						= "";
		    $totalSquareFeet			= "";
		    $currentValue				= "";
		    $dateOfConstruction			= "";
		    $buildingMaterialStructure	= "";
		    $lastRenovationDate			= "";	   
		    $propertyCertification		= "";
		    $commonAreas				= "";
		    $facilities					= "";
		    $amenities					= "";
		    $accessibility				= "";
		    $securitySystem				= "";
		    $accessControlSystem		= "";
		    $parkingSpots				= "";
		    $parkingFee					= "";
		    $parkingAmount				= "";
		    $parkingAmountMonthly		= "";
		    $image						= "";
		    $building_name				= "";
		    $property_type				= "";
		    $location					= "";
		    $region						= "";
		    $manager_id					= "";
		    $land_breadth				= "";
		    $land_length				= "";
		    $square_feet				= "";
		    $features_selection_list	= "";
		    $building_certification		= "";
		    $type_of_rent				= "";
		    $rent						= "";
		    $rate_per_square_feet		= "";
		    $lease_date					= "";
		    $status 					= "";
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
                    <span class="name">Propriété</span>
                    </a>
                </div>
                <div class="submenu">
                    <a href="property.php" class="link submenu-title text-decoration-none"><i class='bx bx-buildings'></i><span>Propriété</span></a>
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
            <div class="text">Propriétés</div>
        </div>
        <div class="position-absolute top-0 end-0">
            <nav class="navbar bg-transparent">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit"><i class='bx bx-search'></i></button>
                    </form>
                    <a href="property.php" class="btn btn-warning ms-3" >Property List</a>
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
                                    <h5 class="card-title">Property Details</h5>
                                    
                                </div>
                                <div class="scroller">
                                    <div class="card" style="width: 100%;">
                                        <div class="card-body ">

    <form enctype="multipart/form-data" action="../controller/PropertyController.php" method="POST">
    <table class="table table-bordered border-secondary" id="tbl">
        <tbody>
            <!-- Basic Information -->
            <tr>
                <td>Property category :</td>
                <td>
					  <select name="propertyCategory" id="propertyCategory">
					    <option value="Residentiel" <?php if($propertyCategory == "Residentiel") echo 'selected'; ?>>Residentiel</option>
						<option value="Commercial" <?php if($propertyCategory == "Commercial") echo 'selected'; ?>>Commercial</option>

					  </select>
            </tr>
            <tr>
                <td>Property Type :</td>
                <td>
					  <select name="propertyType" id="propertyType">
					    <option value="Residentiel" <?php if($propertyType == "Residentiel") echo 'selected'; ?>>Residentiel</option>
						<option value="Commercial" <?php if($propertyType == "Commercial") echo 'selected'; ?>>Commercial</option>

					  </select>
            </tr>
            <tr>
                <td>Property Name</td>
                <td><input type="text" id="propertyName" name="propertyName" value="<?php echo $propertyName;?>"></td>
            </tr>
            <tr>
                <td>Rue</td>
                <td><input type="text" id="street" name="street" value="<?php echo $street;?>"></td>
            </tr>
            <tr>
                <td>Ville</td>
                <td><input type="text" id="city" name="city" value="<?php echo $city;?>"></td>
            </tr>
            <tr>
                <td>Province</td>
                <td><input type="text" id="provinceState" name="provinceState" value="<?php echo $provinceState;?>"></td>
            </tr>
            <tr>
                <td>Code Postal</td>
                <td><input type="text" id="zipCode" name="zipCode" value="<?php echo $zipCode;?>"></td>
            </tr>
            <tr>
                <td>Pays</td>
                <td><input type="text" id="country" name="country" value="<?php echo $address;?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" id="address" name="address" value="<?php echo $address;?>"></td>
            </tr>

            <!-- Property Details -->
            <tr>
                <td>Number of Floors</td>
                <td><input type="number" id="numberOfFloors" name="numberOfFloors" value="<?php echo $numberOfFloors;?>"></td>
            </tr>
            <tr>
                <td>Number of Units</td>
                <td><input type="number" name="numberOfUnits" id="numberOfUnits" value="<?php echo $numberOfUnits;?>"></td>
            </tr>
            <tr>
                <td>Property Image</td>
                <td> <input type="file"  name="propertyImage" id="propertyImage"></td>
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
                <td>Height</td>
                <td><input type="number" name="height" id="height" value="<?php echo $height;?>"></td>
            </tr>
            <tr>
                <td>Depth</td>
                <td><input type="number" name="depth" id="depth" value="<?php echo $depth;?>"></td>
            </tr>
            <tr>
                <td>Total Square Feet</td>
                <td><input type="number" name="totalSquareFeet" id="totalSquareFeet" value="<?php echo $totalSquareFeet;?>"></td>
            </tr>
            <!-- Add more rows for other fields -->

            <!-- Financial Information -->
            <tr>
                <td>Current Value</td>
                <td><input type="number" name="currentValue" id="currentValue" value="<?php echo $currentValue;?>"></td>
            </tr>
            <tr>
                <td>Date of Construction</td>
                <td><input type="date" name="dateOfConstruction" id="dateOfConstruction" value="<?php echo $dateOfConstruction;?>">></td>
            </tr>
            <tr>
                <td>Building Material/Structure</td>
                <td><input type="text" name="buildingMaterialStructure" id="buildingMaterialStructure" value="<?php echo $buildingMaterialStructure;?>"></td>
            </tr>
            <tr>
                <td>Last Renovation Date</td>
                <td><input type="date" name="lastRenovationDate" id="lastRenovationDate" value="<?php echo $lastRenovationDate;?>"></td>
            </tr>
           
            <tr>
                <td>Common Areas</td>
                <td><input type="checkbox" id="commonAreas" name="commonAreas" value="Yes" <?php if($commonAreas == "Yes") echo 'checked'; ?>><label style="margin-left: -25%;" for="commonAreas"> Yes</label>
 				</td>
            </tr>

            <tr>
                <td>Facilities</td>
                <td><input type="checkbox" id="facilities" name="facilities" value="Yes" <?php if($facilities == "Yes") echo 'checked'; ?>><label style="margin-left: -25%;"  for="facilities"> Yes</label></td>
            </tr>
            <tr>
                <td>Amenities</td>
                <td><input type="checkbox" id="amenities" name="amenities" value="Yes" <?php if($amenities == "Yes") echo 'checked'; ?>><label style="margin-left: -25%;"  for="amenities"> Yes</label></td>
            </tr>
            <tr>
                <td>Accessibility</td>
                <td><input type="checkbox" id="accessibility" name="accessibility" value="Yes" <?php if($accessibility == "Yes") echo 'checked'; ?>><label style="margin-left: -25%;"  for="accessibility"> Yes</label></td>
                
            </tr>
            <tr>
                <td>Security System</td>
                <td><input type="checkbox" id="securitySystem" name="securitySystem" value="Yes" <?php if($securitySystem == "Yes") echo 'checked'; ?>><label style="margin-left: -25%;"  for="securitySystem"> Yes</label></td>
                	
            </tr>
            <tr>
                <td>Access Control System</td>
                <td><input type="checkbox" id="accessControlSystem" name="accessControlSystem" value="Yes" <?php if($accessControlSystem == "Yes") echo 'checked'; ?>><label style="margin-left: -25%;"  for="accessControlSystem"> Yes</label></td>

            </tr>
            <tr>
                <td>Parking Spots</td>
                <td><input type="number" name="parkingSpots" id="parkingSpots" value="<?php echo $parkingSpots;?>"></td>
            </tr>
            <tr>
                <td>Parking Fee</td>
                <td><input type="number" name="parkingFee" id="parkingFee" value="<?php echo $parkingFee;?>"></td>
            </tr>
            <tr>
                <td>Parking Amount</td>
                <td><input type="number" name="parkingAmount" id="parkingAmount" value="<?php echo $parkingAmount;?>"></td>
            </tr>
            <tr>
                <td>Parking Amount Monthly</td>
                <td><input type="number" name="parkingAmountMonthly" id="parkingAmountMonthly" value="<?php echo $parkingAmountMonthly;?>"></td>
            </tr>
            <!-- Add more rows for other fields -->

            <!-- Additional Information -->
           
            
            <tr>
                <td>Manager ID</td>
                <td>
                	<select name="manager_id" id="manager_id">
					    <option value="1" <?php if($manager_id == "1") echo 'selected'; ?>>Test</option>
					    <option value="2" <?php if($manager_id == "2") echo 'selected'; ?>>Test 2</option>
					 </select>
				</td>
            </tr>
            <tr>
                <td>Land Breadth</td>
                <td><input type="number" name="land_breadth" id="land_breadth" value="<?php echo $land_breadth;?>"></td>
            </tr>
            <tr>
                <td>Land Length</td>
                <td><input type="number" name="land_length" id="land_length" value="<?php echo $land_length;?>"></td>
            </tr>
            <tr>
                <td>Square Feet</td>
                <td><input type="number" name="square_feet" id="square_feet" value="<?php echo $square_feet;?>"></td>
            </tr>
            <tr>
                <td>Features Selection List</td>
                <td><input type="text" name="features_selection_list" id="features_selection_list" value="<?php echo $features_selection_list;?>"></td>
            </tr>
            
            <tr>
                <td>Type of Rent</td>
                <td><input type="text" name="type_of_rent" id="type_of_rent" value="<?php echo $type_of_rent;?>"></td>
            </tr>
            <tr>
                <td>Rent</td>
                <td><input type="number" name="rent" id="rent" value="<?php echo $rent;?>"></td>
            </tr>
            <tr>
                <td>Rate per Square Feet</td>
                <td><input type="number" name="rate_per_square_feet" id="rate_per_square_feet" value="<?php echo $rate_per_square_feet;?>"></td>
            </tr>
            <tr>
                <td>Lease Date</td>
                <td><input type="date" name="lease_date" id="lease_date" value="<?php echo $lease_date;?>"></td>
            </tr>
            
            
            <!-- Add more rows for other fields -->
        </tbody>
    </table>
    <input type="hidden" name="user_id" id="user_id" value="<?php echo $current_user_id;?>">
<input type="submit" id="Add_property" name="Add_property" value="+ Property">


    
    
</form>
	</div>
</div></div></div></div></div></div>
        </div>
       
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    </section>
</body>
</html>
