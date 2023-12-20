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
                    <a href         = "#" class="link submenu-title text-decoration-none">Portail Administarteur</a>
                    <!-- submenu links here  -->
                </div>
            </li>
        </ul>
    </div>

    <!-- ============= Home Section =============== -->
    <section class="home">
        <div class="toggle-sidebar">
            <i class='bx bx-menu'></i>
            <div class="text">Tableau de bord </div>
          
        </div>
        <div class="position-absolute top-0 end-0"><nav class="navbar bg-transparent">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit"><i class='bx bx-search'></i></button>
                    </form>
                   
                </div>
                    
        </div>
        <div class="affichage">
        <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card bg-transparent ms-2">
      <div class="card-body">
        <h5 class="card-title">Requêtes</h5>
        <canvas id="myChart"></canvas>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card bg-transparent mw-30" id="chart">
    
      <div class="card-body">
        <h5 class="card-title">Occupation des unités</h5>
        <canvas id="doughnutChart"></canvas>
       
      </div>
    </div>
  </div>
</div>      
            
        </div>

        <div class="affichage">
        <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card bg-transparent ms-2" id="chart">
      <div class="card-body">
        <h5 class="card-title">Consommation d'énergie</h5>
        <canvas id="cChart"></canvas>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card bg-transparent mw-30" id="info">
    
      <div class="card-body">
        <h5 class="card-title">Opérations</h5>
        <div class="d-grid gap-2">
        









        <button class="btn text-start" type="button" id="btnAdmin"><a class="text-decoration-none" href="#">+ Prpopriété</a></button>
        <button class="btn text-start" type="button" id="btnAdmin"><a class="text-decoration-none" href="#">+ Unité</a></button>
        <button class="btn text-start" type="button" id="btnAdmin"><a class="text-decoration-none" href="#">+ Maintenance</a></button>
        <button class="btn text-start" type="button" id="btnAdmin"><a class="text-decoration-none" href="#">+ Inspection</a></button>
        <button class="btn text-start" type="button" id="btnAdmin"><a class="text-decoration-none" href="#">+ Inventaire</a></button>
        <button class="btn text-start" type="button" id="btnAdmin"><a class="text-decoration-none" href="#">+ Bon de commande</a></button>
        <button class="btn text-start" type="button" id="btnAdmin"><a class="text-decoration-none" href="#">+ Compagnie</a></button>
        
        
        </div>
        
       
      </div>
    </div>
  </div>
</div>
          



    </section>

    <!-- Link JS -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="assets/js/charts.js"></script>
</body>

</html>