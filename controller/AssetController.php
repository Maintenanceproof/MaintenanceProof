<?php
// include "../head.inc.php";
// include "../model/DBManager.class.php";
// include "dbConnection.php";
// include "dbConnection2.php";

$assetMgr = new AssetManager();


if(isset($_POST['Add_asset'])){		

    $id                     =
    $propertyId             =
    $floor                  =
    $location               =
    $emplacement            =
    $assetName              =
    $buildingComponent      =
    $assetType              =
    $modelNumber            =
    $assetStatus            =
    $relationship           =
    $master                 =
    $warranty               =
    $installationDate       =
    $warrantyInfo           =
    $purchaseDate           =
    $serialNumber           =
    $lastMaintenanceDate    =
    $maintenanceRecords     =
    $manufacturer           =
    $supplier               =
    $supplierContact        =
    $lifeExpectancy         =
    $depreciation           =
    $purchaseCost           =
    $currentValue           =
    $maintenanceRep         =
    $maintenanceRepDate     =
    $notes                  =
    $status                 =



    

		if (  ) {				#add required validations where mandatory fields cant be empty

			$asset = new Asset( $propertyId,$floor,$location,$emplacement,$assetName,$buildingComponent,$assetType,$modelNumber,$assetStatus,$relationship,$master,$warranty,$installationDate,$warrantyInfo,$purchaseDate,$serialNumber,$lastMaintenanceDate,$maintenanceRecords,$manufacturer,$supplier,$supplierContact,$lifeExpectancy,$depreciation,$purchaseCost,$currentValue,$maintenanceRep,$maintenanceRepDate,$notes,$status)	
			#calling Asset class

			$assetMgr->addAsset( $asset );

			#Redirect to Asset List with Success msg

		}else{

			# Redirect to add Asset page with the error msg for them to fill again
		}

}else if(isset($_POST['Edit_Asset'])){


	$id                     =
    $propertyId             =
    $floor                  =
    $location               =
    $emplacement            =
    $assetName              =
    $buildingComponent      =
    $assetType              =
    $modelNumber            =
    $assetStatus            =
    $relationship           =
    $master                 =
    $warranty               =
    $installationDate       =
    $warrantyInfo           =
    $purchaseDate           =
    $serialNumber           =
    $lastMaintenanceDate    =
    $maintenanceRecords     =
    $manufacturer           =
    $supplier               =
    $supplierContact        =
    $lifeExpectancy         =
    $depreciation           =
    $purchaseCost           =
    $currentValue           =
    $maintenanceRep         =
    $maintenanceRepDate     =
    $notes                  =
    $status                 =



    

        if (  ) {               #add required validations where mandatory fields cant be empty

            $asset = new Asset( $id,$propertyId,$floor,$location,$emplacement,$assetName,$buildingComponent,$assetType,$modelNumber,$assetStatus,$relationship,$master,$warranty,$installationDate,$warrantyInfo,$purchaseDate,$serialNumber,$lastMaintenanceDate,$maintenanceRecords,$manufacturer,$supplier,$supplierContact,$lifeExpectancy,$depreciation,$purchaseCost,$currentValue,$maintenanceRep,$maintenanceRepDate,$notes,$status)    
            #calling Asset class

            $assetMgr->editAsset( $asset );

            #Redirect to Asset List with Success msg

        }else{

            # Redirect to add Asset page with the error msg for them to fill again
        }


}



?>