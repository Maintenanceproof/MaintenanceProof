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
                    <a href="#" class="link text-decoration-none"><i class='bx bx-package' ></i></i><span>Bons d'achat</span></a>
                   
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

                    <!-- submenu links here  -->
                </div>
            
            
              </li>




          
        </ul>
    </div>

    <!-- ============= Home Section =============== -->
    <section class="home">
        <div class="toggle-sidebar">
            <i class='bx bx-menu'></i>
            <div class="text">Propriétés</div>
          
        </div>
        <div class="position-absolute top-0 end-0"><nav class="navbar bg-transparent">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit"><i class='bx bx-search'></i></button>
                    </form>
                    <a href="" class="btn btn-warning ms-3">+ Propriété</a>
                </div>
                    
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
          
<div class="row">
   
  <div class="col-sm-6 mb-2 mb-sm-0" id="toutes" >
  
    <div class="card bg-transparent">
      
      <div class="card-body">
        <h5 class="card-title">Propriétés</h5>
        <div class="scroller">
          <form action="" method="">
        <a href="#" class="text-decoration-none">
        <div class="card mb-3 bg-transparent" style="max-width: 540px;">
        <div class="row g-0">
        <div class="col-md-4">
        <img src="..." class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
        <h5 class="card-title" name="">Propriété X</h5>
        <p class="card-text"  name="">Adresse</p>
       
      </div>
      </div>
      </div>
  
      </div>
      </a>
      </form>
        </div>
      </div>
    </div>
  </div>
  
  
  
 
  <div class="col-sm-2 " id="detail">
 
    <div class="card bg-transparent">
      <div class="card-body">
        <div class="prophead">
          <h5 class="card-title">Vue d'ensemble</h5>
          <div >
          <button type="button" class="btn btn-warning"><i class='bx bx-edit' ></i></button>
          <button type="button" class="btn btn-warning"><i class='bx bx-trash'></i></button>
          </div>
      </div>
        <div class="scroller">
        <div class="card" style="width: 100%;">
          <div class="card-body">
          <table class = "table table-bordered border-secondary" id = "tbl">
             
             <tbody>
              <tr>
                <td>Nom de la propriété</td>
                <td></td>
              </tr>
                
              <tr>
                <td>Type de la propriété</td>
                <td></td>
              </tr>

              <tr>
                <td>Adresse</td>
                <td></td>
              </tr>

             
              </tr>

             </tbody>

                 </table>
            
                 <div class="pbox">
                    <!-- météo widget-->
                    <div class="propertybox">
                        <h6>Météo</h6>
                        <div class="widget">
                            
                        </div>
                    </div>
                    <!-- Map widget-->
                    <div class="propertybox">
                        <h6>Localisation</h6>
                        <div class="widget">

                        </div>

                    </div>
                 </div>

                 <!-- Property images-->

                 <div class="pbox">
                    <!-- img 2-->
                    <div class="propertybox">
                        <h6>Image</h6>
                        <div class="pimg">
                            <img src="assets/img/logo1.png" alt="">
                        </div>
                    </div>
                    <!-- img3-->
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
                       <!-- more détails-->
                      Détails supplémentaires
                       </button>
                       </h2>
                       <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                       <div class="accordion-body">
                       <table class = "table table-bordered border-secondary" id = "tbl">
             
                              <tbody>
                              <tr>
                              <td>Nombre de niveaux</td>
                              <td></td>
                              </tr>
                
                              <tr>
                              <td>Nombre d'unités</td>
                              <td></td>
                              </tr>

                              </tbody>

                        </table>

                        <div class="pbox">
                    <!-- img 4-->
                    <div class="propertybox">
                        <h6>Image</h6>
                        <div class="pimg">
                            <img src="assets/img/logo1.png" alt="">
                        </div>
                    </div>
                    <!-- img5-->
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
                       <!-- Dimensions détails-->
                      
                      Dimensions de la propriété
                      </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body"> 
                      <table class = "table table-bordered border-secondary" id = "tbl">
             
                      <tbody>
                      <tr>
                      <td>Longueur en pi2</td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>Largeur en pi2</td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>Hauteur en pi2</td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>Profondeur en pi2</td>
                      <td></td>
                      </tr>

                      <tr>
                      <td>Total de pieds carrés</td>
                      <td></td>
                      </tr>

                      </tbody>

                      </table>

                      </div>
                      </div>
                   </div>
                   <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Autres détails
                       </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
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




            
            
        </div>



    </section>

    <!-- Link JS -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>