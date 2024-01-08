<?php
include "../view/head.inc.php";
include "dbConnection.php";
include "../model/Equipment.class.php";
include "../model/EquipmentManager.class.php";

$equipmentMgr = new EquipmentManager();


if(isset($_POST['Add_equipment'])){     

    $id                 = "";
    $filepath   = "EquipmentImage/" . $_FILES["image"]["name"];
    #getting file name for image
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $filepath)){

        $image = $filepath;
    }else{
        $image = "";
    }
    $property_id        = intval($_POST['propertyName']);
    $floor              = "" ;
    $location           = $_POST['location'];
    $emplacement        = $_POST['emplacement']; 
    $assetName          = $_POST['assetName']; 
    $buildingComponent  = $_POST['buildingComponent']; 
    $assetType          = $_POST['assetType']; 
    $modelNumber        = $_POST['modelNumber']; 
    $assetStatus        = $_POST['assetStatus'];  
    $relationship       = $_POST['relationship']; 

    $warranty           = "" ;
    $installationDate   = $_POST['installationDate']; 
    $warrantyInfo       = $_POST['warrantyInfo'];
    $purchaseDate       = $_POST['purchaseDate']; 
    $serialNumber       = $_POST['serialNumber'];
    $lastMaintenanceDate = $_POST['lastMaintenanceDate']; 
    $maintenanceRecords = "" ;
    $manufacturer       = $_POST['manufacturer']; 
    $supplier           = $_POST['supplier'];  
    $supplierContact    = $_POST['supplierContact'];
    $lifeExpectancy     = $_POST['lifeExpectancy'];
    $depreciation       = "" ;
    $purchaseCost       = $_POST['purchaseCost'];
    $currentValue       = $_POST['currentValue'];
    $maintenanceRep     = "" ;
    $maintenanceRepDate = "" ;
    $notes              = $_POST['notes'];
    $status             = 1;
    $user_id            = intval($_POST['user_id']);


    

        if ( $user_id != null ) {               #add required validations where mandatory fields cant be empty

            $equipment = new Equipment($id,$user_id,$property_id,$floor,$location,$emplacement,$assetName,$buildingComponent,$assetType,$modelNumber,$assetStatus,$relationship,$image,$warranty,$installationDate,$warrantyInfo,$purchaseDate,$serialNumber,$lastMaintenanceDate,$maintenanceRecords,$manufacturer,$supplier,$supplierContact,$lifeExpectancy,$depreciation,$purchaseCost,$currentValue,$maintenanceRep,$maintenanceRepDate,$notes,$status);

            #calling Inventory class

            $equipmentMgr->addEquipment( $equipment );

            #Redirect to Inventory List with Success msg
            header( "location: ../view/equipment.php" );

        }else{

            header( "location: ../view/add_equipment.php" );
        }

}



?>