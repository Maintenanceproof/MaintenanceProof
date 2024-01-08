<?php

include "../view/head.inc.php";
include "dbConnection.php";
include "../model/Unit.class.php";
include "../model/UnitManager.class.php";

$unitMgr = new UnitManager();


if(isset($_POST['Add_unit'])){		

	        $id                   = "";
            $propertyName         = intval($_POST['propertyName']);
            $unitNumber           = $_POST['unitNumber'];
            $unitType             = $_POST['unitType'];
            $floorNumber          = $_POST['floorNumber'];
            $address              = $_POST['address'];
            $occupied             = isset($_POST['occupied']) ? 'Yes' : 'No';

            $filepath   = "UnitImage/" . $_FILES["unitImage"]["name"];
            $filepath1  = "UnitImage/" . $_FILES["image1"]["name"];
            $filepath2  = "UnitImage/" . $_FILES["image2"]["name"];
            $filepath3  = "UnitImage/" . $_FILES["image3"]["name"];
            $filepath4  = "UnitImage/" . $_FILES["image4"]["name"];
            $filepath5  = "UnitImage/" . $_FILES["image5"]["name"];

            if(move_uploaded_file($_FILES["unitImage"]["tmp_name"], $filepath)){

                $unitImage = $filepath;
            }else{
                $unitImage = "";
            }

            #getting file name for image
            if(move_uploaded_file($_FILES["image1"]["tmp_name"], $filepath1)){

                $image1 = $filepath1;
            }else{
                $image1 = "";
            }

            #getting file name for image
            if(move_uploaded_file($_FILES["image2"]["tmp_name"], $filepath2)){

                $image2 = $filepath2;
            }else{
                $image2 = "";
            }


            #getting file name for image
            if(move_uploaded_file($_FILES["image3"]["tmp_name"], $filepath3)){

                $image3 = $filepath3;
            }else{
                $image3 = "";
            }

            #getting file name for image
            if(move_uploaded_file($_FILES["image4"]["tmp_name"], $filepath4)){

                $image4 = $filepath4;
            }else{
                $image4 = "";
            }

            #getting file name for image
            if(move_uploaded_file($_FILES["image5"]["tmp_name"], $filepath5)){

                $image5 = $filepath5;
            }else{
                $image5 = "";
            }

            $number_of_images = "";

            $length               = $_POST['length'];
            if($length == null){
                $length = 0;
            } 
            $breadth              = $_POST['breadth']; 
             if($breadth == null){
                $breadth = 0;
            }     
            $total_area           = $_POST['total_area'];
            if($total_area == null){
                $total_area = 0;
            }  
            $number_of_bedroom    = $_POST['number_of_bedroom'];
            if($number_of_bedroom == null){
                $number_of_bedroom = 0;
            }  
            $number_of_bathroom   = $_POST['number_of_bathroom'];
            if($number_of_bathroom == null){
                $number_of_bathroom = 0;
            }  
            $number_of_windows    = $_POST['number_of_windows'];
            if($number_of_windows == null){
                $number_of_windows = 0;
            }  
            $furnished            = isset($_POST['furnished']) ? 'Yes' : 'No';
            $equiped_with         = $_POST['equiped_with'];
            $unit_feature         = $_POST['unit_feature'];
            $camion_size          = $_POST['camion_size'];
            $type_of_heating      = $_POST['type_of_heating'];
            $description          = $_POST['description'];
            $purchase_price       = $_POST['purchase_price'];
            if($purchase_price == null){
                $purchase_price = 0;
            } 
            $mortgage_balance     = $_POST['mortgage_balance'];
            if($mortgage_balance == null){
                $mortgage_balance = 0;
            }  
            $monthly_mortgage     = $_POST['monthly_mortgage'];
            if($monthly_mortgage == null){
                $monthly_mortgage = 0;
            }  
            $property_tax         = $_POST['property_tax'];
            if($property_tax == null){
                $property_tax = 0;
            }  
            $unit_name            = $_POST['unit_name'];
            $building_name_id     = 0;
            $unit_status          = $_POST['unit_status'];
            $Location = "";
            $Region = "";
            $Land_length = 0;
            $Land_breadth = 0;
            $Unit_Area = 0;
            $Number_of_seats = 0;
            $Parking_space = 0;
            $Parking_type = "";
            $user_id              = intval($_POST['user_id']);



    

		if ( $propertyName != null ) {				#add required validations where mandatory fields cant be empty

			$unit = new Unit($id, $propertyName,$unitNumber,$unitType,$floorNumber,$address,$occupied,$unitImage,$number_of_images,$image1,$image2,$image3,$image4,$image5,$length,$breadth,$total_area,$number_of_bedroom,$number_of_bathroom,$number_of_windows,$furnished,$equiped_with,$unit_feature,$camion_size,$type_of_heating,$description,$purchase_price,$mortgage_balance,$monthly_mortgage,$property_tax,$unit_name,$building_name_id,$unit_status,$Location,$Region,$Land_length,$Land_breadth,$Unit_Area,$Number_of_seats,$Parking_space,$Parking_type,$user_id);
			#calling Unit class

			$unitMgr->addUnit( $unit );

			header( "location: ../view/unit.php" );

        }else{

            header( "location: ../view/add_unit.php" );
        }

}else if(isset($_POST['Edit_unit'])){

            $id                   = intval($_POST['unit_id']); 
            $propertyName         = intval($_POST['propertyName']);
            $unitNumber           = $_POST['unitNumber'];
            $unitType             = $_POST['unitType'];
            $floorNumber          = $_POST['floorNumber'];
            $address              = $_POST['address'];
            $occupied             = isset($_POST['occupied']) ? 'Yes' : 'No';

          
                $unitImage = "";
            

         
                $image1 = "";
            

                $image2 = "";
            


            
                $image3 = "";
            

       
                $image4 = "";
            

                $image5 = "";
            

            $number_of_images = "";

            $length               = $_POST['length'];
            if($length == null){
                $length = 0;
            } 
            $breadth              = $_POST['breadth']; 
             if($breadth == null){
                $breadth = 0;
            }     
            $total_area           = $_POST['total_area'];
            if($total_area == null){
                $total_area = 0;
            }  
            $number_of_bedroom    = $_POST['number_of_bedroom'];
            if($number_of_bedroom == null){
                $number_of_bedroom = 0;
            }  
            $number_of_bathroom   = $_POST['number_of_bathroom'];
            if($number_of_bathroom == null){
                $number_of_bathroom = 0;
            }  
            $number_of_windows    = $_POST['number_of_windows'];
            if($number_of_windows == null){
                $number_of_windows = 0;
            }  
            $furnished            = isset($_POST['furnished']) ? 'Yes' : 'No';
            $equiped_with         = $_POST['equiped_with'];
            $unit_feature         = $_POST['unit_feature'];
            $camion_size          = $_POST['camion_size'];
            $type_of_heating      = $_POST['type_of_heating'];
            $description          = $_POST['description'];
            $purchase_price       = $_POST['purchase_price'];
            if($purchase_price == null){
                $purchase_price = 0;
            } 
            $mortgage_balance     = $_POST['mortgage_balance'];
            if($mortgage_balance == null){
                $mortgage_balance = 0;
            }  
            $monthly_mortgage     = $_POST['monthly_mortgage'];
            if($monthly_mortgage == null){
                $monthly_mortgage = 0;
            }  
            $property_tax         = $_POST['property_tax'];
            if($property_tax == null){
                $property_tax = 0;
            }  
            $unit_name            = $_POST['unit_name'];
            $building_name_id     = 0;
            $unit_status          = $_POST['unit_status'];
            $Location = "";
            $Region = "";
            $Land_length = 0;
            $Land_breadth = 0;
            $Unit_Area = 0;
            $Number_of_seats = 0;
            $Parking_space = 0;
            $Parking_type = "";
            $user_id              = intval($_POST['user_id']);



    

        if ( $propertyName != null ) {              #add required validations where mandatory fields cant be empty

            $unit = new Unit($id, $propertyName,$unitNumber,$unitType,$floorNumber,$address,$occupied,$unitImage,$number_of_images,$image1,$image2,$image3,$image4,$image5,$length,$breadth,$total_area,$number_of_bedroom,$number_of_bathroom,$number_of_windows,$furnished,$equiped_with,$unit_feature,$camion_size,$type_of_heating,$description,$purchase_price,$mortgage_balance,$monthly_mortgage,$property_tax,$unit_name,$building_name_id,$unit_status,$Location,$Region,$Land_length,$Land_breadth,$Unit_Area,$Number_of_seats,$Parking_space,$Parking_type,$user_id);
            #calling Unit class

            if($unitMgr->editUnit( $unit )){
                header( "location: ../view/unit.php" );
            }


        }else{

            header( "location: ../view/edit_unit.php" );
        }

}



?>
