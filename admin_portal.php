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
    <link rel="shortcut icon" href="logo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
                    <!-- submenu links here  -->
                </div>
            </li>
        </ul>
    </div>

    <!-- ============= Home Section =============== -->
    <section class="home">
        <div class="toggle-sidebar">
            <i class='bx bx-menu'></i>
            <div class="text">Portail administrateur</div>
          
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

            <div class="compteurs">
                <div class="box">
                   <div class="card bg-transparent" style="width: 100%; height: 100%;">
                   <div class="card-body">
                   <h5 class="card-title"  style="font-weight: 600;"><a href="#" class="text-decoration-none">Maintenances</a></h5>
                   <h6 class="card-subtitle mb-2 text-body-secondary" style="font-size: 60px;  font-weight: 600;">13 <!--php --></h6>
                   <p class="card-text"></p>
                   <a href="#" class="card-link text-decoration-none" style="font-size: 20px; ">+ Maintenance</a>

                   </div>
                  </div>
                </div>
                <div class="box">
                
                <div class="card bg-transparent" style="width: 100%; height: 100%;">
                <div class="card-body">
                <h5 class="card-title" style="font-weight: 600;"><a href="#" class="text-decoration-none">Inspections</a></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary" style="font-size: 60px;  font-weight: 600;">4 <!--php --></h6>
                <p class="card-text"></p>
                <a href="#" class="card-link text-decoration-none" style="font-size: 20px; "> + Inspection</a>
                </div>
                </div>
                </div>
                
                
                <div class="box">
                <div class="card bg-transparent" style="width: 100%; height: 100%;">
                <div class="card-body">
                <h5 class="card-title" style="font-weight: 600;"><a href="#" class="text-decoration-none">Locataires</a></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary" style="font-size: 60px;  font-weight: 600;">15 <!--php --></h6>
                <p class="card-text"></p>
                <a href="#" class="card-link text-decoration-none" style="font-size: 20px; ">+ Locataire</a>
                </div> 
                </div>
                </div>
                
                
                <div class="box">
                <div class="card bg-transparent" style="width: 100%; height: 100%;">
                <div class="card-body">
                <h5 class="card-title" style="font-weight: 600;"><a href="#" class="text-decoration-none">Assignations</a></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary" style="font-size: 60px;  font-weight: 600;">2 <!--php --></h6>
                <p class="card-text"></p>
                <a href="#" class="card-link text-decoration-none" style="font-size: 20px; ">+ Assignation</a>
                </div> 
                </div>

                </div>
            </div>
            <div class="affichage">
          
          <div class="row">
             
            <div class="col-sm-6 mb-2 mb-sm-0" id="toutes" >
            
              <div class="card bg-transparent">
                
                <div class="card-body" >
                  <div class="cardhead">
                    <h5 class="card-title" style="margin-top: 5px;">Tous les utilisateurs</h5>
                  <a href="#"><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop10"> + Utilisateur</button></a>
                  <div class="modal fade" id="staticBackdrop10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter un utilisateur</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                 <div class="modal-body">

                 <form>
                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Type d'utilisateur</label>
                       <select class="form-select" id="inputGroupSelect01">
                       <option selected>Choisir...</option>
                       <option value="1">Gestionnaire d'immeuble</option>
                       <option value="2">Gestionnaire des opérations</option>
                       <option value="3">Chef de bureau</option>
                       <option value="4">Gestionnaire des installations</option>
                       <option value="5">Concièrge</option>
                       <option value="6">Personnel de Maintenance</option>
                       <option value="7">Compagnie</option>
                       <option value="8">Inspecteur</option>
                       <option value="9">Locataire</option>
                      </select>
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect02">Forfait utilisateur</label>
                       <select class="form-select" id="inputGroupSelect02">
                       <option selected>Choisir...</option>
                       <option value="1">Forfait 1</option>
                       <option value="2">Forfait 2</option>
                       <option value="3">Forfait 3</option>
                       <option value="4">Forfait 4</option>
                       
                      </select>
                </div>

               


                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse courriel</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
               
        ...
                 </div>
                 <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                 <button type="submit" class="btn btn-warning">Soumettre</button>
                 
                 </div>
                 </form>
                 </div>
                 </div>
                 </div>
                
                
                
                
                
                </div>
                  <div class="scroller">
                
                  <div class="show"><a href="#" class="text-decoration-none" >
                  
                  <div class="card mb-3 bg-transparent" style="max-width: 540px;" >
                  <div class="row g-0">
                  <div class="col-md-4">
                    <div class="show" style="font-size: 80px; font-weight:100">
                    <i class='bx bx-user-pin'></i>
                    
                    </div>
                 
                  </div>
                  <div class="col-md-8">
                  <div class="card-body">
                  <h5 class="card-title">Courriel</h5>
                  <h6 class="card-text">Type d'utilisateur</h6>
                  <h6 class="card-text">ID : </h6>
       
                </div>
                </div>
                </div>
  
                 </div>
                 </a></div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
           
            <div class="col-sm-2 " id="detail">
           
              <div class="card bg-transparent">
                <div class="card-body">
                  <h5 class="card-title">Opérations</h5>

                  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
       
      </div>
    </div>
  </div>
  <div class="col-sm-6" >
    <div class="card" id="inf">
      <div class="card-body">
        <h5 class="card-title">Ajouts</h5>
        <div class="d-grid gap-2">
        <button class="btn mw-40 text-start" type="button" id="btnAdmin" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <a class="text-decoration-none" href="#">+ Gestionnaire d'immeuble</a>
        </button>
        <div  class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content" id="modal">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter un gestionnaire d'immeuble</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       <div class="modal-body">
      
                <form>
                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect02">ID Utilisateur</label>
                       <select class="form-select" id="inputGroupSelect02">
                       <option selected>Choisir...</option>
                       <option value="1">ID 1</option>
                       <option value="2">ID 2</option>
                       <option value="3">ID 3</option>
                       <option value="4">ID 4</option>
                       
                      </select>
                </div>





                 <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Nom</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse courriel</label>
                <input type="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Langue</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de livraison</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de facturation</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" accept=".jpg, .jpeg, .png ">
                </div>
                
                
                <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                 <button type="submit" class="btn btn-warning"><a href="#" class="text-decoration-none" id="modalbtn">Ajouter</a></button>
                </div>
  
                </form>
        


       </div>
    

       </div>
       </div>
       </div>




       <button class="btn mw-40 text-start" type="button" id="btnAdmin" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
            <a class="text-decoration-none" href="#">+ Gestionnaire des installations</a>
        </button>
        <div  class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content" id="modal">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Gestionnaire des installations</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       <div class="modal-body">
      
                <form>

                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect02">ID Utilisateur</label>
                       <select class="form-select" id="inputGroupSelect02">
                       <option selected>Choisir...</option>
                       <option value="1">ID 1</option>
                       <option value="2">ID 2</option>
                       <option value="3">ID 3</option>
                       <option value="4">ID 4</option>
                       
                      </select>
                </div>
                 <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Nom</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse courriel</label>
                <input type="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Langue</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de livraison</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de facturation</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" accept=".jpg, .jpeg, .png ">
                </div>
                
                
                <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                 <button type="submit" class="btn btn-warning"><a href="#" class="text-decoration-none" id="modalbtn">Ajouter</a></button>
                </div>
  
                </form>
        


       </div>
    

       </div>
       </div>
       </div>


       <button class="btn mw-40 text-start" type="button" id="btnAdmin" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
            <a class="text-decoration-none" href="#">+ Gestionnaire des opérations</a>
        </button>
        <div  class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content" id="modal">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter un gestionnaire des opération</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       <div class="modal-body">
      
                <form>

                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect02">ID Utilisateur</label>
                       <select class="form-select" id="inputGroupSelect02">
                       <option selected>Choisir...</option>
                       <option value="1">ID 1</option>
                       <option value="2">ID 2</option>
                       <option value="3">ID 3</option>
                       <option value="4">ID 4</option>
                       
                      </select>
                </div>
                 <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Nom</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse courriel</label>
                <input type="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Langue</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de livraison</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de facturation</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" accept=".jpg, .jpeg, .png ">
                </div>
                
                
                <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                 <button type="submit" class="btn btn-warning"><a href="#" class="text-decoration-none" id="modalbtn">Ajouter</a></button>
                </div>
  
                </form>
        


       </div>
    

       </div>
       </div>
       </div>


       <button class="btn mw-40 text-start" type="button" id="btnAdmin" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
            <a class="text-decoration-none" href="#">+ Directeur</a>
        </button>
        <div  class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content" id="modal">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter un DIRECTEUR</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       <div class="modal-body">
      
                <form>
                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect02">ID Utilisateur</label>
                       <select class="form-select" id="inputGroupSelect02">
                       <option selected>Choisir...</option>
                       <option value="1">ID 1</option>
                       <option value="2">ID 2</option>
                       <option value="3">ID 3</option>
                       <option value="4">ID 4</option>
                       
                      </select>
                </div>

                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect02">Type de CO</label>
                       <select class="form-select" id="inputGroupSelect02">
                       <option selected>Choisir...</option>
                       <option value="1">CEO</option>
                       <option value="2">CFO</option>
                       <option value="3">COO</option>
                       <option value="4">CTO</option>
                       <option value="5">CIO</option>
                       
                      </select>
                </div>
                 <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Nom</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse courriel</label>
                <input type="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Langue</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de livraison</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de facturation</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" accept=".jpg, .jpeg, .png ">
                </div>
                
                
                <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                 <button type="submit" class="btn btn-warning"><a href="#" class="text-decoration-none" id="modalbtn">Ajouter</a></button>
                </div>
  
                </form>
        


       </div>
    

       </div>
       </div>
       </div>


       <button class="btn mw-40 text-start" type="button" id="btnAdmin" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
            <a class="text-decoration-none" href="#">+ Compagnie</a>
        </button>
        <div  class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content" id="modal">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter une compagnie</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       <div class="modal-body">
      
                <form>
                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect02">ID Utilisateur</label>
                       <select class="form-select" id="inputGroupSelect02">
                       <option selected>Choisir...</option>
                       <option value="1">ID 1</option>
                       <option value="2">ID 2</option>
                       <option value="3">ID 3</option>
                       <option value="4">ID 4</option>
                       
                      </select>
                </div>
                 <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Nom de la compagnie</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse courriel</label>
                <input type="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Site web</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Langue</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de livraison</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de facturation</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" accept=".jpg, .jpeg, .png ">
                </div>
                
                
                <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                 <button type="submit" class="btn btn-warning"><a href="#" class="text-decoration-none" id="modalbtn">Ajouter</a></button>
                </div>
  
                </form>
        


       </div>
    

       </div>
       </div>
       </div>



       
       <button class="btn mw-40 text-start" type="button" id="btnAdmin" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
            <a class="text-decoration-none" href="#">+ Personnel d'entretien</a>
        </button>
        <div  class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content" id="modal">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter un personnel d'entretien</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       <div class="modal-body">
      
                <form>
                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect02">ID Utilisateur</label>
                       <select class="form-select" id="inputGroupSelect02">
                       <option selected>Choisir...</option>
                       <option value="1">ID 1</option>
                       <option value="2">ID 2</option>
                       <option value="3">ID 3</option>
                       <option value="4">ID 4</option>
                       
                      </select>
                </div>
                 <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Nom</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse courriel</label>
                <input type="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Langue</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de livraison</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de facturation</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" accept=".jpg, .jpeg, .png ">
                </div>
                
                
                <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                 <button type="submit" class="btn btn-warning"><a href="#" class="text-decoration-none" id="modalbtn">Ajouter</a></button>
                </div>
  
                </form>
        


       </div>
    

       </div>
       </div>
       </div>

       
       <button class="btn mw-40 text-start" type="button" id="btnAdmin" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
            <a class="text-decoration-none" href="#">+ Inspecteur</a>
        </button>
        <div  class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content" id="modal">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter un inspecteur</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       <div class="modal-body">
      
                <form>
                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect02">ID Utilisateur</label>
                       <select class="form-select" id="inputGroupSelect02">
                       <option selected>Choisir...</option>
                       <option value="1">ID 1</option>
                       <option value="2">ID 2</option>
                       <option value="3">ID 3</option>
                       <option value="4">ID 4</option>
                       
                      </select>
                </div>
                 <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Nom</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse courriel</label>
                <input type="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Langue</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de livraison</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de facturation</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" accept=".jpg, .jpeg, .png ">
                </div>
                
                
                <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                 <button type="submit" class="btn btn-warning"><a href="#" class="text-decoration-none" id="modalbtn">Ajouter</a></button>
                </div>
  
                </form>
        


       </div>
    

       </div>
       </div>
       </div>


       
       <button class="btn mw-40 text-start" type="button" id="btnAdmin" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
            <a class="text-decoration-none" href="#">+ Concièrge</a>
        </button>
        <div  class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content" id="modal">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter un concièrge</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       <div class="modal-body">
      
                <form>
                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect02">ID Utilisateur</label>
                       <select class="form-select" id="inputGroupSelect02">
                       <option selected>Choisir...</option>
                       <option value="1">ID 1</option>
                       <option value="2">ID 2</option>
                       <option value="3">ID 3</option>
                       <option value="4">ID 4</option>
                       
                      </select>
                </div>
                 <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Nom</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse courriel</label>
                <input type="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Langue</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de livraison</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de facturation</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" accept=".jpg, .jpeg, .png ">
                </div>
                
                
                <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                 <button type="submit" class="btn btn-warning"><a href="#" class="text-decoration-none" id="modalbtn">Ajouter</a></button>
                </div>
  
                </form>
        


       </div>
    

       </div>
       </div>
       </div>
       
       
       <button class="btn mw-40 text-start" type="button" id="btnAdmin" data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
            <a class="text-decoration-none" href="#">+ Locataire</a>
        </button>
        <div  class="modal fade" id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content" id="modal">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter un locataire</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       <div class="modal-body">
      
                <form>
                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect02">ID Utilisateur</label>
                       <select class="form-select" id="inputGroupSelect02">
                       <option selected>Choisir...</option>
                       <option value="1">ID 1</option>
                       <option value="2">ID 2</option>
                       <option value="3">ID 3</option>
                       <option value="4">ID 4</option>
                       
                      </select>
                </div>
                 <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Nom</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                 <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse courriel</label>
                <input type="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Langue</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de livraison</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Adresse de facturation</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" accept=".jpg, .jpeg, .png ">
                </div>
                
                
                <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                 <button type="submit" class="btn btn-warning"><a href="#" class="text-decoration-none" id="modalbtn">Ajouter</a></button>
                </div>
  
                </form>
        


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
              </div>
            
          
          </div>
          
           

           

        </div>



    </section>

    <!-- Link JS -->
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
