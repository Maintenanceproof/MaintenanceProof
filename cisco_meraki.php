<!DOCTYPE html>
<html lang="en">

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
            <i class='' ><img src="assets/img/logo1.png" heigth="50px" width="65px"></i>
            <div class="logo-name">Maintenanceproof</div>
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
                    <a href="#" class="link text-decoration-none">
                        <i class='bx bx-buildings'></i>
                        <span class="name">Actifs</span>
                    </a>
                   
                </div>
                <div class="submenu">
                    <a href="equipement.php" class="link submenu-title text-decoration-none"><i class='bx bxs-door-open'></i><span>Équipements</span></a>
                    <a href="#" class="link text-decoration-none"><i class='bx bx-barcode-reader'></i><span>Inventaires</span></a>
                    <a href="#" class="link text-decoration-none"><i class='bx bx-package' ></i><span>Bons d'achat</span></a>
                   
                </div>
            </li>

            

            
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link text-decoration-none">
                        <i class='bx bx-cog'></i>
                        <span class="name">Settings</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title text-decoration-none"><i class='bx bx-cog'></i><span>Settings</span></a>
                    <a href="admin_portal.php" class="link  text-decoration-none"><i class='bx bx-bar-chart-alt-2' ></i><span>Portail adninistrateur</span></a>
                    <a href="cisco_meraki.php" class="link  text-decoration-none"><i class='bx bx-line-chart' ></i><span>Cisco/Meraki</span></a>

                    <!-- submenu links here  -->
                </div>
            
            
              </li>




          
        </ul>
    </div>

    <!-- ============= Home Section =============== -->
    <section class="home">
        <div class="toggle-sidebar">
            <i class='bx bx-menu'></i>
            <div class="text">Cisco/Meraki</div>
          
        </div>
        

        
        <div class="affichage">
            <div class="ciscotitle">
                <h5>Organisations</h5>

            </div>

                    <table class="table" id="ciscotbl">
                    <thead>
                        <tr>
                        
                        <th scope="col">Organisation</th>
                        <th scope="col">ID</th>
                        <th scope="col">Action</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                        <td>Mark</td>
                        <td>198JOHYDJFO44889</td>
                        
                        <td>
                        <button type="button" class="btn btn-warning"><i class='bx bx-edit' ></i></button>
                        <button type="button" class="btn btn-warning"><i class='bx bx-trash'></i></button>
                        </td>

                        </tr>
                        
                    </tbody>
                    </table>


                    <div class="ciscotitle">
                    
                    <h5>Utilisateurs</h5>
                    </div>

                    <table class="table" id="ciscotbl">
                    <thead>
                        <tr>
                        
                        <th scope="col">Agent Utilisateur</th>
                        <th scope="col">ID</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                        <td>Mark</td>
                        <td>4564-IJFINFFUF</td>
                        
                        <td>
                        <button type="button" class="btn btn-warning"><i class='bx bx-edit' ></i></button>
                        <button type="button" class="btn btn-warning"><i class='bx bx-trash'></i></button>
                        </td>

                        </tr>
                        
                    </tbody>
                    </table>
                            



            
            
        </div>



    </section>

    <!-- Link JS -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>