<?php


include "../view/head.inc.php";
include "dbConnection.php";
include "../model/Property.class.php";
include "../model/PropertyManager.class.php";

$propertyMgr = new PropertyManager();



if(isset($_POST['Add_property'])) {     

 
    $user_id                    = intval($_POST['user_id']);
    $propertyCategory= $_POST['propertyCategory'];
    $propertyType               = $_POST['propertyType'];
    $propertyName               = $_POST['propertyName'];
    $street               = $_POST['street'];
    $city              = $_POST['city'];
    $provinceState               = $_POST['provinceState'];
    $zipCode               = $_POST['zipCode'];
    $country               = $_POST['country'];

    $address                    = $_POST['address'];
    $numberOfFloors             = $_POST['numberOfFloors'];
     if($numberOfFloors == null){
        $numberOfFloors = 0;
    }
    $numberOfUnits              = $_POST['numberOfUnits'];
     if($numberOfUnits == null){
        $numberOfUnits = 0;
    }
    
    $filepath1  = "PropertyImage/" . $_FILES["image1"]["name"];
    $filepath2  = "PropertyImage/" . $_FILES["image2"]["name"];
    $filepath3  = "PropertyImage/" . $_FILES["image3"]["name"];
    $filepath4  = "PropertyImage/" . $_FILES["image4"]["name"];
    $filepath5  = "PropertyImage/" . $_FILES["image5"]["name"];

    #getting file name for image
    $filepath  = "PropertyImage/" . $_FILES["propertyImage"]["name"];
    if(move_uploaded_file($_FILES["propertyImage"]["tmp_name"], $filepath)){

        $propertyImage = $filepath;
    }else{
        $propertyImage = "";
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

    $length                     = $_POST['length'];
    if($length == null){
        $length = 0;
    }

    $breadth                    = $_POST['breadth'];
         if($breadth == null){
        $breadth = 0;
    }
    $height                     = $_POST['height'];
     if($height == null){
        $height = 0;
    }
    $depth                      = $_POST['depth'];
     if($depth == null){
        $depth = 0;
    }
    $totalSquareFeet            = $_POST['totalSquareFeet'];
     if($totalSquareFeet == null){
        $totalSquareFeet = 0;
    }
    $currentValue               = $_POST['currentValue'];
     if($currentValue == null){
        $currentValue = 0;
    }
    $dateOfConstruction         = $_POST['dateOfConstruction'];
    $buildingMaterialStructure  = $_POST['buildingMaterialStructure'];
    $lastRenovationDate         = $_POST['lastRenovationDate'];
    $propertyCertification      = "";
    $commonAreas                = isset($_POST['commonAreas']) ? 'Yes' : 'No';
    $facilities                 = isset($_POST['facilities']) ? 'Yes' : 'No';
    $amenities                  = isset($_POST['amenities']) ? 'Yes' : 'No';
    $accessibility              = isset($_POST['accessibility']) ? 'Yes' : 'No';
    $securitySystem             = isset($_POST['securitySystem']) ? 'Yes' : 'No';
    $accessControlSystem        = isset($_POST['accessControlSystem']) ? 'Yes' : 'No';
    $parkingSpots               = $_POST['parkingSpots'];
     if($parkingSpots == null){
        $parkingSpots = 0;
    }
    $parkingFee                 = $_POST['parkingFee'];
     if($parkingFee == null){
        $parkingFee = 0;
    }
    $parkingAmount              = $_POST['parkingAmount'];
     if($parkingAmount == null){
        $parkingAmount = 0;
    }
    $parkingAmountMonthly       = $_POST['parkingAmountMonthly'];
     if($parkingAmountMonthly == null){
        $parkingAmountMonthly = 0;
    }
    $image                      = "";
    $building_name              = "";
    $property_type              = "";
    $location                   = "";
    $region                     = "";
    $manager_id                 = $_POST['manager_id'];
    if($manager_id == null){
        $manager_id = 0;
    }
    $land_breadth               = $_POST['land_breadth'];
    if($land_breadth == null){
        $land_breadth = 0;
    }
    $land_length                = $_POST['land_length'];
    if($land_length == null){
        $land_length = 0;
    }
    $square_feet                = $_POST['square_feet'];
    if($square_feet == null){
        $square_feet = 0;
    }
    $features_selection_list    = $_POST['features_selection_list'];

    $building_certification     = "";
    $type_of_rent               = $_POST['type_of_rent'];
    $rent                       = $_POST['rent'];
    if($rent == null){
        $rent = 0;
    }
    $rate_per_square_feet       = $_POST['rate_per_square_feet'];
    if($rate_per_square_feet == null){
        $rate_per_square_feet = 0;
    }
    $lease_date                 = $_POST['lease_date'];
    $status                     = 1;
    $id                         = "";

    

        if ( $propertyName != null && $propertyImage != "") {               #add required validations where mandatory fields cant be empty

            $property = new Property($id, $user_id,$propertyCategory,$propertyType,$propertyName,$street,$city,$provinceState,$zipCode,$country,$address,$numberOfFloors,$numberOfUnits,$propertyImage,$image1,$image2,$image3,$image4,$image5,$length,$breadth,$height,$depth,$totalSquareFeet,$currentValue,$dateOfConstruction,$buildingMaterialStructure,$lastRenovationDate,$propertyCertification,$commonAreas,$facilities,$amenities,$accessibility,$securitySystem,$accessControlSystem,$parkingSpots,$parkingFee,$parkingAmount,$parkingAmountMonthly,$image,$building_name,$property_type,$location,$region,$manager_id,$land_breadth,$land_length,$square_feet,$features_selection_list,$building_certification,$type_of_rent,$rent,$rate_per_square_feet,$lease_date,$status);   
            #calling Property class

            $propertyMgr->addProperty( $property );



            header( "location: ../view/property.php" );

        }else{

            header( "location: ../view/add_property.php" );
        }

 }
else if(isset($_POST['Edit_property'])){


    $user_id                    = $_POST['user_id'];
    $propertyCategory= $_POST['propertyCategory'];
    $propertyType               = $_POST['propertyType'];
    $propertyName               = $_POST['propertyName'];
    $street                    = $_POST['street'];
    $city                    = $_POST['city'];
    $provinceState                    = $_POST['provinceState'];
    $zipCode                    = $_POST['zipCode'];
    $country                    = $_POST['country'];
    $address                    = $_POST['address'];
    $numberOfFloors             = $_POST['numberOfFloors'];
     if($numberOfFloors == null){
        $numberOfFloors = 0;
    }
    $numberOfUnits              = $_POST['numberOfUnits'];
     if($numberOfUnits == null){
        $numberOfUnits = 0;
    }
    $filepath  = "PropertyImage/" . $_FILES["propertyImage"]["name"];
    $filepath1  = "PropertyImage/" . $_FILES["image1"]["name"];
    $filepath2  = "PropertyImage/" . $_FILES["image2"]["name"];
    $filepath3  = "PropertyImage/" . $_FILES["image3"]["name"];
    $filepath4  = "PropertyImage/" . $_FILES["image4"]["name"];
    $filepath5  = "PropertyImage/" . $_FILES["image5"]["name"];

    #getting file name for image
    if(move_uploaded_file($_FILES["propertyImage"]["tmp_name"], $filepath)){

        $propertyImage = $filepath;
    }else{
        $propertyImage = "";
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

    $length                     = $_POST['length'];
    if($length == null){
        $length = 0;
    }

    $breadth                    = $_POST['breadth'];
         if($breadth == null){
        $breadth = 0;
    }
    $height                     = $_POST['height'];
     if($height == null){
        $height = 0;
    }
    $depth                      = $_POST['depth'];
     if($depth == null){
        $depth = 0;
    }
    $totalSquareFeet            = $_POST['totalSquareFeet'];
     if($totalSquareFeet == null){
        $totalSquareFeet = 0;
    }
    $currentValue               = $_POST['currentValue'];
     if($currentValue == null){
        $currentValue = 0;
    }
    $dateOfConstruction         = $_POST['dateOfConstruction'];
    $buildingMaterialStructure  = $_POST['buildingMaterialStructure'];
    $lastRenovationDate         = $_POST['lastRenovationDate'];
    $propertyCertification      = "";
    $commonAreas                = isset($_POST['commonAreas']) ? 'Yes' : 'No';
    $facilities                 = isset($_POST['facilities']) ? 'Yes' : 'No';
    $amenities                  = isset($_POST['amenities']) ? 'Yes' : 'No';
    $accessibility              = isset($_POST['accessibility']) ? 'Yes' : 'No';
    $securitySystem             = isset($_POST['securitySystem']) ? 'Yes' : 'No';
    $accessControlSystem        = isset($_POST['accessControlSystem']) ? 'Yes' : 'No';
    $parkingSpots               = $_POST['parkingSpots'];
     if($parkingSpots == null){
        $parkingSpots = 0;
    }
    $parkingFee                 = $_POST['parkingFee'];
     if($parkingFee == null){
        $parkingFee = 0;
    }
    $parkingAmount              = $_POST['parkingAmount'];
     if($parkingAmount == null){
        $parkingAmount = 0;
    }
    $parkingAmountMonthly       = $_POST['parkingAmountMonthly'];
     if($parkingAmountMonthly == null){
        $parkingAmountMonthly = 0;
    }
    $image                      = "";
    $building_name              = "";
    $property_type              = "";
    $location                   = "";
    $region                     = "";
    $manager_id                 = $_POST['manager_id'];
    if($manager_id == null){
        $manager_id = 0;
    }
    $land_breadth               = $_POST['land_breadth'];
    if($land_breadth == null){
        $land_breadth = 0;
    }
    $land_length                = $_POST['land_length'];
    if($land_length == null){
        $land_length = 0;
    }
    $square_feet                = $_POST['square_feet'];
    if($square_feet == null){
        $square_feet = 0;
    }
    $features_selection_list    = $_POST['features_selection_list'];

    $building_certification     = "";
    $type_of_rent               = $_POST['type_of_rent'];
    $rent                       = $_POST['rent'];
    if($rent == null){
        $rent = 0;
    }
    $rate_per_square_feet       = $_POST['rate_per_square_feet'];
    if($rate_per_square_feet == null){
        $rate_per_square_feet = 0;
    }
    $lease_date                 = $_POST['lease_date'];
    $status                     = intval($_POST['property_status']); 
    $id                         = intval($_POST['property_id']); 

    

        if ( $propertyName != null ) {              #add required validations where mandatory fields cant be empty

            $property = new Property($id, $user_id,$propertyCategory,$propertyType,$propertyName,$street,$city,$provinceState,$zipCode,$country,$address,$numberOfFloors,$numberOfUnits,$propertyImage,$image1,$image2,$image3,$image4,$image5,$length,$breadth,$height,$depth,$totalSquareFeet,$currentValue,$dateOfConstruction,$buildingMaterialStructure,$lastRenovationDate,$propertyCertification,$commonAreas,$facilities,$amenities,$accessibility,$securitySystem,$accessControlSystem,$parkingSpots,$parkingFee,$parkingAmount,$parkingAmountMonthly,$image,$building_name,$property_type,$location,$region,$manager_id,$land_breadth,$land_length,$square_feet,$features_selection_list,$building_certification,$type_of_rent,$rent,$rate_per_square_feet,$lease_date,$status);   
            #calling Property class

            $propertyMgr->editProperty( $property );


            header( "location: ../view/property.php" );


        }else{

            header( "location: ../view/property.php" );
        }

}
else{
    die("Page Not Available");
    
}



?>