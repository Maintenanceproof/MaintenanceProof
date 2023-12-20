<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset    = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name       = "viewport" content        = "width=device-width, initial-scale=1.0">
    <title>MaintenanceProof</title>

    <!-- Box Icons  -->
    <link href = 'https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel = 'stylesheet'>
    <!-- Styles  -->
    <link rel  = "shortcut icon" href                                                          = "assets/img/logo1.png" type = "image/x-icon">
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel = "stylesheet">
    <link rel  = "stylesheet" href                                                             = "assets/css/style.css">
</head>

<body>
    <div class          = "sidebar close">
         <!--  ========== Logo         ============ -->
    <a   href           = "#" class               = "logo-box text-decoration-none">
    <i   class          = '' ><img src            = "assets/img/logo1.png" heigth = "50px" width = "65px"></i>
    <div class          = "logo-name">Maintenanceproof</div>
        </a>

            <!--  ========== List ============ -->
        <ul class          = "sidebar-list">
            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div  class = "title">
                <a    href  = "dashboard.php" class = "link text-decoration-none">
                <i    class = 'bx bx-grid-alt'></i>
                <span class = "name">Dashboard</span>
                    </a>
                    <!-- <i class = 'bx bxs-chevron-down'></i> -->
                </div>
                <div class = "submenu">
                <a   href  = "dashboard.php" class = "link submenu-title text-decoration-none">Dashboard</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li   class = "dropdown">
            <div  class = "title">
            <a    href  = "#" class = "link text-decoration-none">
            <i    class = 'bx bx-buildings'></i>
            <span class = "name">Propriété</span>
                    </a>
                   
                </div>
                <div class = "submenu">
                <a   href  = "property.php" class = "link submenu-title text-decoration-none"><i class = 'bx bx-buildings'></i><span>Propriété</span></a>
                <a   href  = "#" class            = "link text-decoration-none"><i class               = 'bx bx-building'></i><span>Unités</span></a>
                <a   href  = "#" class            = "link text-decoration-none"><i class               = 'bx bx-category'></i><span>Composantes</span></a>
                <a   href  = "#" class            = "link text-decoration-none"><i class               = 'bx bx-traffic-cone'></i><span>Stationnements</span></a>
                </div>
            </li>


             <!-- -------- Dropdown List Item ------- -->
             <li   class = "dropdown">
             <div  class = "title">
             <a    href  = "#" class = "link text-decoration-none">
             <i    class = 'bx bxs-door-open'></i>
             <span class = "name">Actifs</span>
                    </a>
                   
                </div>
                <div class = "submenu">
                <a   href  = "equipement.php" class = "link submenu-title text-decoration-none"><i class = 'bx bxs-door-open'></i><span>Équipements</span></a>
                <a   href  = "#" class              = "link text-decoration-none"><i class               = 'bx bx-barcode-reader'></i><span>Inventaires</span></a>
                <a   href  = "#" class              = "link text-decoration-none"><i class               = 'bx bx-package' ></i></i><span>Bons d'achat</span></a>
                   
                </div>
            </li>

            

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div  class = "title">
                <a    href  = "#" class = "link text-decoration-none">
                <i    class = 'bx bx-cog'></i>
                <span class = "name">Settings</span>
                    </a>
                    <!-- <i class = 'bx bxs-chevron-down'></i> -->
                </div>
                <div class = "submenu">
                <a   href  = "#" class                = "link submenu-title text-decoration-none">Settings</a>
                <a   href  = "admin_portal.php" class = "link submenu-title text-decoration-none">Portail adninistrateur</a>
                    <!-- submenu links here  -->
                </div>
            </li>
        </ul>
    </div>

             <!--  ============= Home Section =============== -->
    <section class             = "home">
    <div     class             = "toggle-sidebar">
    <i       class             = 'bx bx-menu'></i>
    <div     class             = "text">Équipements</div>
          
        </div>
        <div    class = "position-absolute top-0 end-0"><nav class = "navbar bg-transparent">
        <div    class = "container-fluid">
        <form   class = "d-flex" role                              = "search">
        <input  class = "form-control me-2" type                   = "search" placeholder = "Rechercher" aria-label = "Search">
        <button class = "btn btn-outline-warning" type             = "submit"><i class    = 'bx bx-search'></i></button>
                    </form>
                    <a href = "" class = "btn btn-warning ms-3">+ Équipement</a>
                </div>
                    
        </div>
        <div class = "affichage">
          
<div class = "row">
   
  <div class = "col-sm-6 mb-2 mb-sm-0" id = "toutes" >
  
    <div class = "card bg-transparent">
      
  <div class = "card-body">
  <h5  class = "card-title">Tous les équipements</h5>
  <div class = "scroller">
  <a   href  = "#" class                        = "text-decoration-none">
  <div class = "card mb-3 bg-transparent" style = "max-width: 540px;">
  <div class = "row g-0">
  <div class = "col-md-4">
  <img src   = "assets/img/logo1.png" class     = "img-fluid rounded-start" alt = "...">
    </div>
    <div class = "col-md-8">
    <div class = "card-body">
    <h5  class = "card-title">Équipement X</h5>
    <p   class = "card-text">Bâtiment</p>
       
      </div>
    </div>
  </div>
  
</div>
</a>
        </div>
      </div>
    </div>
  </div>
  
  
  
 
  <div class = "col-sm-2 " id = "detail">
 
    <div class = "card bg-transparent">
    <div class = "card-body">
    <h5  class = "card-title">Détail de l'équipement</h5>
        <div class = "scroller">

        <div   class = "card" style                               = "width: 100%;">
        <div   class = "card-body">
        <h6    class = "card-title">Identification</h6>
        <table class = "table table-bordered border-secondary" id = "tbl">
             
                <tbody>
                 <tr>
                   <td>Nom de l'équipement</td>
                   <td>Pompe</td>
                 </tr>
                   
                 <tr>
                   <td>Groupe Majeur</td>
                   <td>D Services</td>
                 </tr>

                 <tr>
                   <td>Groupe d'éléments</td>
                   <td>D50 Éléctricité</td>
                 </tr>

                 <tr>
                   <td>Élément</td>
                   <td>D5010 Service de distribution éléctrique</td>
                 </tr>

                 <tr>
                   <td>Marque</td>
                   <td>GE</td>
                 </tr>

                 <tr>
                   <td>Modèle</td>
                   <td>GE3456</td>
                 </tr>

                 <tr>
                   <td>Numéro de série</td>
                   <td>D-097-986-56</td>
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
                    <img src   = "assets/img/logo1.png" class = "img-fluid rounded-start" alt = "...">
                     </div>
                     </div>
                    </div>
                    <h6    class = "card-title">Usage</h6>

<table class = "table table-bordered border-secondary" id = "tbl">

<tbody>
<tr>
<td>Usage</td>
<td>Pompe</td>
</tr>

<tr>
<td>Type d'inventaire</td>
<td></td>
</tr>

<tr>
<td>Élément principal</td>
<td></td>
</tr>



</tbody>

</table>





<h6    class = "card-title">Localisation</h6>
<table class = "table table-bordered border-secondary" id = "tbl">

<tbody>
<tr>
<td>Site</td>
<td></td>
</tr>

<tr>
<td>Bâtiment</td>
<td></td>
</tr>

<tr>
<td>Niveau</td>
<td></td>
</tr>


<tr>
<td>Local</td>
<td></td>
</tr>


<tr>
<td>Endroit</td>
<td></td>
</tr>

<tr>
<td>Hauteur</td>
<td></td>
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




            
            
        </div>



    </section>

    <!-- Link JS -->
    <script src = "assets/js/main.js"></script>
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>