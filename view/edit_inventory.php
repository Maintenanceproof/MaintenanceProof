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


    if(isset($_SESSION['inventory_edit']) == true && $_SESSION['inventoryId'] != null){
        $i_id = $_SESSION['inventoryId'];
        $query    = $db2->query( "SELECT id, user_id, image, property_id, type_of_inventory, name, code, stock_owner, product_active, vendor_id, manufacturer_id, cost, retail_price, estimated_labor, quantity, description, status FROM inventory WHERE id = $i_id");
        $inventories     = $query->fetchAll( PDO::FETCH_ASSOC );

        foreach ($inventories as $inventory) {
            
            
            $id                   = $inventory['id'];
            $propertyName         = $inventory['property_id'];
            $image                = $inventory['image'];
            $type_of_inventory    = $inventory['type_of_inventory'];
            $user_id              = $inventory['user_id'];
            $name                 = $inventory['name'];
            $code                 = $inventory['code'];
            $stock_owner          = $inventory['stock_owner'];
            $product_active       = $inventory['product_active'];
            $vendor_id            = $inventory['vendor_id'];
            $manufacturer_id      = $inventory['manufacturer_id'];
            $cost                 = $inventory['cost'];
            $retail_price         = $inventory['retail_price'];
            $estimated_labor      = $inventory['estimated_labor'];
            $quantity             = $inventory['quantity'];
            $description          = $inventory['description'];    
            $status               = $inventory['status'];
  
        }

    }else{
            $id                   = "";
            $propertyName         = "";
            $image                = "";
            $type_of_inventory    = "";
            $user_id              = "";
            $name                 = "";
            $code                 = "";
            $stock_owner          = "";
            $product_active       = "";
            $vendor_id            = "";
            $manufacturer_id      = "";
            $cost                 = "";
            $retail_price         = "";
            $estimated_labor      = "";
            $quantity             = "";
            $description          = "";    
            $status               = "";
    }
		    		  
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
                    <span class="name">Invnentory</span>
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
            <div class="text">Inventory</div>
        </div>
        <div class="position-absolute top-0 end-0">
            <nav class="navbar bg-transparent">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit"><i class='bx bx-search'></i></button>
                    </form>
                    <a href="inventory.php" class="btn btn-warning ms-3" >Inventory List</a>
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
                                    <h5 class="card-title">Invnetory Details</h5>
                                    
                                </div>
                                <div class="scroller">
                                    <div class="card" style="width: 100%;">
                                        <div class="card-body ">

    <form enctype="multipart/form-data" action="../controller/InventoryController.php" method="POST">
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
                                    <option value="<?php echo $property['id'];?>" <?php if($propertyName == $property['id']) echo 'selected'; ?>><?php echo $property['propertyName'];?></option>

                                <?php
                            }

                        ?>
					  </select>
            </tr>
            <tr>
                <td>Type of Inventory</td>
                <td><input type="text" id="type_of_inventory" name="type_of_inventory" value="<?php echo $type_of_inventory;?>"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" id="name" name="name" value="<?php echo $name;?>"></td>
            </tr>

            <!-- Property Details -->
            <tr>
                <td>Code</td>
                <td><input type="text" id="code" name="code" value="<?php echo $code;?>"></td>
            </tr>
            <tr>
                <td>Stock Owner</td>
                <td><input type="text" name="stock_owner" id="stock_owner" value="<?php echo $stock_owner;?>"></td>
            </tr>
            <tr>
                <td>Product Active</td>
                <td>
                    <select name="product_active" id="product_active">
                        <option value="1" <?php if($product_active == 1) echo 'selected'; ?>>Yes</option>
                        <option value="2" <?php if($product_active == 2) echo 'selected'; ?>>No</option>
                        <option value="3" <?php if($product_active == 3) echo 'selected'; ?>>Out of Stock</option>
                    </select>
                </td>
            </tr>
          
            <tr>
                <td>Vendor</td>
                <td>
                    <select name="vendor_id" id="vendor_id">
                        <option value="1" <?php if($vendor_id == 1) echo 'selected'; ?>>Vendor 1</option>
                        <option value="2" <?php if($vendor_id == 2) echo 'selected'; ?>>Vendor 2</option>
                        <option value="3" <?php if($vendor_id == 3) echo 'selected'; ?>>Vendor 3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Manufacturer</td>
                <td>
                    <select name="manufacturer_id" id="manufacturer_id">
                        <option value="1" <?php if($manufacturer_id == 1) echo 'selected'; ?>>Manufacturer 1</option>
                        <option value="2" <?php if($manufacturer_id == 2) echo 'selected'; ?>>Manufacturer 2</option>
                        <option value="3" <?php if($manufacturer_id == 3) echo 'selected'; ?>>Manufacturer 3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Cost</td>
                <td><input type="number" name="cost" id="cost" value="<?php echo $cost;?>"></td>
            </tr>
            <tr>
                <td>Retail Price</td>
                <td><input type="number" name="retail_price" id="retail_price" value="<?php echo $retail_price;?>"></td>
            </tr>
            <tr>
                <td>Estimated Labor</td>
                <td><input type="number" name="estimated_labor" id="estimated_labor" value="<?php echo $estimated_labor;?>"></td>
            </tr>
            <!-- Add more rows for other fields -->

            <!-- Financial Information -->
            <tr>
                <td>Quantity</td>
                <td><input type="number" name="quantity" id="quantity" value="<?php echo $quantity;?>"></td>
            </tr>

            <tr>
                <td>Description</td>
                <td><input type="text" name="description" id="description" value="<?php echo $description;?>"></td>
            </tr>
            
            <!-- Add more rows for other fields -->
        </tbody>
    </table>
    <input type="hidden" id="inventory_id" name="inventory_id" value="<?php echo $id;?>">
    <input type="hidden" name="user_id" id="user_id" value="<?php echo $current_user_id;?>">
<input type="submit" id="Edit_inventory" name="Edit_inventory" value="Edit Inventory">


    
    
</form>
	</div>
</div></div></div></div></div></div>
        </div>
       
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    </section>
</body>
</html>
