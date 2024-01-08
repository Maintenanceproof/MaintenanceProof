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


    $query    = $db2->query( "SELECT id, property_id, unit_number, unit_type, floor_number, address, occupancy_status, unit_image, number_of_images, image1, image2, image3, image4, image5, length, breadth, total_area, number_of_bedrooms, number_of_bathrooms, number_of_windows, furnished, equipped_with, unit_feature, camion_size, type_of_heating, description, purchase_price, mortgage_balance, monthly_mortgage, property_tax, unit_name, building_name_id, unit_status, location, region, land_length, land_breadth, unit_area, number_of_seats, parking_space, parking_type, user_id FROM unit WHERE user_id = $current_user_id");
    $unit     = $query->fetchAll( PDO::FETCH_ASSOC );

    $_SESSION['property_edit'] = false ;
    $_SESSION['propertyId'] = null;

    $_SESSION['unit_edit'] = false ;
    $_SESSION['unitId'] = null;

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
                    <span class="name">Unit</span>
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
            <div class="text">Unit</div>
        </div>
        <div class="position-absolute top-0 end-0">
            <nav class="navbar bg-transparent">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit"><i class='bx bx-search'></i></button>
                    </form>
                    <a href="add_unit.php" class="btn btn-warning ms-3" >+ Unit</a>
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
                        <h5 class="card-title">Units</h5>
                           <div class="scroller">
                                <?php foreach ($unit as $units) { ?>
                                    <form>
                                        <a href="#" onclick="clickProperty(event)" class="text-decoration-none">
                                            <div class="card mb-3 bg-transparent" style="max-width: 540px;">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <?php  
                                                            $img = $units['unit_image'];
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
                                                            <h5 class="card-title" name=""><?php echo $units['unit_number']; ?></h5>
                                                            <p class="card-text" name=""><?php echo $units['address']; ?></p>
                                                            <!-- Use id="unit_id" for the hidden paragraph -->
                                                            <p style="display: none;" id="unit_id"><?php echo $units['id']; ?></p>
                                                            <p style="display: none;" id="property_id"><?php echo $units['property_id']; ?></p>
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
        var unitId = event.currentTarget.querySelector('#unit_id').innerText;

        var propertyId = event.currentTarget.querySelector('#property_id').innerText;
        // Use AJAX to send unitId to the server
        $.ajax({
            type: 'POST',
            url: 'unitprocess.php', // Replace with the actual server-side processing script
            data: { unitId: unitId },
            dataType: 'json', // Expect JSON response
            success: function(response) {
                // Handle the server's response
                console.log(response);

                // Update HTML elements with fetched data (adjust as needed)
                document.getElementById("u_t").innerText                    = response.unit_type;     
                document.getElementById("u_n").innerText                    = response.unit_number;
               
               
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
                document.getElementById("p_n").innerText                    = response.propertyName;
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
                                    <h5 class="card-title">Vue d'ensemble</h5>
                                    <div>
                                        <button type="button" class="btn btn-warning show-form" onclick="edit()"><i class='bx bx-edit' ></i></button>
                                        <script type="text/javascript">
                                            function edit() {
                                                // Redirect to add_property.php
                                                window.location.href = 'edit_unit.php';
                                            }
                                        </script>
                                        <button type="button" class="btn btn-warning"><i class='bx bx-trash'></i></button>
                                    </div>
                                </div>
                                <div class="scroller">
                                    <div class="card" style="width: 100%;">
                                        <div class="card-body">

                                            <table class="table table-bordered border-secondary" id="tbl">
                                                <tbody>
                                                    <tr>
                                                        <td>Nom de la propriété</td>
                                                        <td id="p_n"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Unit Type</td>
                                                        <td id="u_t"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Unit Number</td>
                                                        <td id="u_n"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="pbox">
                                                <div class="propertybox">
                                                    <h6>Météo</h6>
                                                    <div class="widget">
                                                    </div>
                                                </div>
                                                <div class="propertybox">
                                                    <h6>Localisation</h6>
                                                    <div class="widget">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbox">
                                                <div class="propertybox">
                                                    <h6>Image</h6>
                                                    <div class="pimg">
                                                        <img src="assets/img/logo1.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="propertybox">
                                                    <h6>Image</h6>
                                                    <div class="pimg">
                                                        <img src="assets/img/logo1.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                            Détails supplémentaires
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <table class="table table-bordered border-secondary" id="tbl">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Nombre de niveaux</td>
                                                                        <td id=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Nombre d'unités</td>
                                                                        <td id=""></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="pbox">
                                                                <div class="propertybox">
                                                                    <h6>Image</h6>
                                                                    <div class="pimg">
                                                                        <img src="assets/img/logo1.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="propertybox">
                                                                    <h6>Image</h6>
                                                                    <div class="pimg">
                                                                        <img src="assets/img/logo1.png" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                            Dimensions de la propriété
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <table class="table table-bordered border-secondary" id="tbl">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Longueur en pi2</td>
                                                                        <td id=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Largeur en pi2</td>
                                                                        <td id=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Hauteur en pi2</td>
                                                                        <td id=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Profondeur en pi2</td>
                                                                        <td id=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Total de pieds carrés</td>
                                                                        <td id=""></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                                        Autres détails
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body"></div>
                                                </div>
                                            </div>
                                        </div>
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
