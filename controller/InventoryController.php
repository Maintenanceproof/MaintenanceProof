<?php
include "../view/head.inc.php";
include "dbConnection.php";
include "../model/Inventory.class.php";
include "../model/InventoryManager.class.php";

$inventoryMgr = new InventoryManager();


if(isset($_POST['Add_inventory'])){		

    $id                 = "";
    $filepath   = "InventoryImage/" . $_FILES["image"]["name"];
    #getting file name for image
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $filepath)){

        $image = $filepath;
    }else{
        $image = "";
    }
    $property_id        = intval($_POST['propertyName']);
    $type_of_inventory  = $_POST['type_of_inventory'];
    $name               = $_POST['name'];
    $code               = $_POST['code'];
    $stock_owner        = $_POST['stock_owner'];
    $product_active     = intval($_POST['product_active']);
    $vendor_id          = intval($_POST['vendor_id']);
    $manufacturer_id    = intval($_POST['manufacturer_id']);
    $cost               = $_POST['cost'];
    if($cost == null){
        $cost = 0;
    }
    $retail_price       = $_POST['retail_price'];
    if($retail_price == null){
        $retail_price = 0;
    }
    $estimated_labor    = $_POST['estimated_labor'];
    if($estimated_labor == null){
        $estimated_labor = 0;
    }
    $quantity           = $_POST['quantity'];
    if($quantity == null){
        $quantity = 0;
    }
    $description        = $_POST['description'];
    $status             = 1;
    $user_id            = intval($_POST['user_id']);


    

		if ( $user_id != null ) {				#add required validations where mandatory fields cant be empty

			$inventory = new Inventory($id, $user_id, $image ,$property_id ,$type_of_inventory ,$name ,$code ,$stock_owner ,$product_active ,$vendor_id ,$manufacturer_id ,$cost ,$retail_price ,$estimated_labor ,$quantity ,$description ,$status);

			#calling Inventory class

			$inventoryMgr->addInventory( $inventory );

			#Redirect to Inventory List with Success msg
            header( "location: ../view/inventory.php" );

		}else{

			header( "location: ../view/add_inventory.php" );
		}

}
else if(isset($_POST['Edit_inventory'])){


	$id                 = intval($_POST['inventory_id']);
    $image              = "";
    
    $property_id        = intval($_POST['propertyName']);
    $type_of_inventory  = $_POST['type_of_inventory'];
    $name               = $_POST['name'];
    $code               = $_POST['code'];
    $stock_owner        = $_POST['stock_owner'];
    $product_active     = intval($_POST['product_active']);
    $vendor_id          = intval($_POST['vendor_id']);
    $manufacturer_id    = intval($_POST['manufacturer_id']);
    $cost               = $_POST['cost'];
    if($cost == null){
        $cost = 0;
    }
    $retail_price       = $_POST['retail_price'];
    if($retail_price == null){
        $retail_price = 0;
    }
    $estimated_labor    = $_POST['estimated_labor'];
    if($estimated_labor == null){
        $estimated_labor = 0;
    }
    $quantity           = $_POST['quantity'];
    if($quantity == null){
        $quantity = 0;
    }
    $description        = $_POST['description'];
    $status             = 1;
    $user_id            = intval($_POST['user_id']);


    

        if ( $user_id != null ) {               #add required validations where mandatory fields cant be empty

            $inventory = new Inventory($id, $user_id, $image ,$property_id ,$type_of_inventory ,$name ,$code ,$stock_owner ,$product_active ,$vendor_id ,$manufacturer_id ,$cost ,$retail_price ,$estimated_labor ,$quantity ,$description ,$status);

            #calling Inventory class

            $inventoryMgr->editInventory( $inventory );

            #Redirect to Inventory List with Success msg
            header( "location: ../view/inventory.php" );

        }else{

            header( "location: ../view/edit_inventory.php" );
        }


}



?>