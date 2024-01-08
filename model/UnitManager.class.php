<?php

class UnitManager extends DBManager {

    public function addUnit(Unit $unit) {
    $query = $this->db->prepare(
    "INSERT INTO unit (
        property_id, unit_number, unit_type, floor_number, address, occupancy_status, 
        unit_image, number_of_images, image1, image2, image3, image4, image5, length, 
        breadth, total_area, number_of_bedrooms, number_of_bathrooms, number_of_windows, 
        furnished, equipped_with, unit_feature, camion_size, type_of_heating, description, 
        purchase_price, mortgage_balance, monthly_mortgage, property_tax, unit_name, 
        building_name_id, unit_status, location, region, land_length, land_breadth, 
        unit_area, number_of_seats, parking_space, parking_type, user_id
    ) VALUES (
        :property_id, :unit_number, :unit_type, :floor_number, :address, 
        :occupancy_status, :unit_image, :number_of_images, :image1, :image2, :image3, 
        :image4, :image5, :length, :breadth, :total_area, :number_of_bedrooms, 
        :number_of_bathrooms, :number_of_windows, :furnished, :equipped_with, 
        :unit_feature, :camion_size, :type_of_heating, :description, :purchase_price, 
        :mortgage_balance, :monthly_mortgage, :property_tax, :unit_name, 
        :building_name_id, :unit_status, :location, :region, :land_length, 
        :land_breadth, :unit_area, :number_of_seats, :parking_space, :parking_type, 
        :user_id
    );"
);
 return $query->execute( array(
             
        'property_id' => $unit->getPropertyId(),
        'unit_number'=> $unit->getUnitNumber(),
        'unit_type'=> $unit->getUnitType(),
        'floor_number'=> $unit->getFloorNumber(),
        'address'=> $unit->getAddress(),
        'occupancy_status' => $unit->getOccupancyStatus(),
        'unit_image' => $unit->getUnitImage(),
        'number_of_images' => $unit->getNumberOfImages(),
        'image1' => $unit->getImage1(),
        'image2' => $unit->getImage2(),
        'image3' => $unit->getImage3(),
        'image4' => $unit->getImage4(),
        'image5' => $unit->getImage5(),
        'length' => $unit->getLength(),
        'breadth' => $unit->getBreadth(),
        'total_area' => $unit->getTotalArea(),
        'number_of_bedrooms' => $unit->getNumberOfBedrooms(),
        'number_of_bathrooms' => $unit->getNumberOfBathrooms(),
        'number_of_windows' => $unit->getNumberOfWindows(),
        'furnished' => $unit->getFurnished(),
        'equipped_with' => $unit->getEquippedWith(),
        'unit_feature' => $unit->getUnitFeature(),
        'camion_size' => $unit->getCamionSize(),
        'type_of_heating' => $unit->getTypeOfHeating(),
        'description' => $unit->getDescription(),
        'purchase_price' => $unit->getPurchasePrice(),
        'mortgage_balance' => $unit->getMortgageBalance(),
        'monthly_mortgage' => $unit->getMonthlyMortgage(),
        'property_tax' => $unit->getPropertyTax(),
        'unit_name' => $unit->getUnitName(),
        'building_name_id' => $unit->getBuildingNameId(),
        'unit_status' => $unit->getUnitStatus(),
        'location' => $unit->getLocation(),
        'region' => $unit->getRegion(),
        'land_length' => $unit->getLandLength(),
        'land_breadth' => $unit->getLandBreadth(),
        'unit_area' => $unit->getUnitArea(),
        'number_of_seats' => $unit->getNumberOfSeats(),
        'parking_space' => $unit->getParkingSpace(),
        'parking_type' => $unit->getParkingType(),
        'user_id' => $unit->getUser_id(),
        
            ) );
}

   public function editUnit(Unit $unit) {
        $query = $this->db->prepare(
            "UPDATE `unit` SET
                property_id = :property_id, unit_number = :unit_number, unit_type = :unit_type, floor_number = :floor_number, address = :address, occupancy_status = :occupancy_status, length = :length, breadth = :breadth, total_area = :total_area, number_of_bedrooms = :number_of_bedrooms, number_of_bathrooms = :number_of_bathrooms, number_of_windows = :number_of_windows, furnished = :furnished, equipped_with = :equipped_with, unit_feature = :unit_feature, camion_size = :camion_size, type_of_heating = :type_of_heating, description = :description, purchase_price = :purchase_price, mortgage_balance = :mortgage_balance, monthly_mortgage = :monthly_mortgage, property_tax = :property_tax, unit_name = :unit_name, building_name_id = :building_name_id, unit_status = :unit_status, location = :location, region = :region, land_length = :land_length, land_breadth = :land_breadth, unit_area = :unit_area,number_of_seats = :number_of_seats,parking_space = :parking_space,parking_type = :parking_type
            WHERE `id` = :id;"
        );

       return $query->execute( array(
        
        'id' =>$unit->getId(),
        'property_id' => $unit->getPropertyId(),
        'unit_number'=> $unit->getUnitNumber(),
        'unit_type'=> $unit->getUnitType(),
        'floor_number'=> $unit->getFloorNumber(),
        'address'=> $unit->getAddress(),
        'occupancy_status' => $unit->getOccupancyStatus(),
        'length' => $unit->getLength(),
        'breadth' => $unit->getBreadth(),
        'total_area' => $unit->getTotalArea(),
        'number_of_bedrooms' => $unit->getNumberOfBedrooms(),
        'number_of_bathrooms' => $unit->getNumberOfBathrooms(),
        'number_of_windows' => $unit->getNumberOfWindows(),
        'furnished' => $unit->getFurnished(),
        'equipped_with' => $unit->getEquippedWith(),
        'unit_feature' => $unit->getUnitFeature(),
        'camion_size' => $unit->getCamionSize(),
        'type_of_heating' => $unit->getTypeOfHeating(),
        'description' => $unit->getDescription(),
        'purchase_price' => $unit->getPurchasePrice(),
        'mortgage_balance' => $unit->getMortgageBalance(),
        'monthly_mortgage' => $unit->getMonthlyMortgage(),
        'property_tax' => $unit->getPropertyTax(),
        'unit_name' => $unit->getUnitName(),
        'building_name_id' => $unit->getBuildingNameId(),
        'unit_status' => $unit->getUnitStatus(),
        'location' => $unit->getLocation(),
        'region' => $unit->getRegion(),
        'land_length' => $unit->getLandLength(),
        'land_breadth' => $unit->getLandBreadth(),
        'unit_area' => $unit->getUnitArea(),
        'number_of_seats' => $unit->getNumberOfSeats(),
        'parking_space' => $unit->getParkingSpace(),
        'parking_type' => $unit->getParkingType(),

            ) );
    }

    public function deleteProperty($unitID) {
        $query = $this->db->prepare("DELETE FROM `unit` WHERE `id` = :id;");
        return $query->execute(['id' => $unitID]);
    }

    private function getUnitParams(Unit $unit) {
        return [
            'id' => $unit->getId(),
            'property_id' => $unit->getPropertyId(),
            'unit_number' => $unit->getUnitNumber(),
            'unit_type' => $unit->getUnitType(),
            'floor_number' => $unit->getFloorNumber(),
            'address' => $unit->getAddress(),
            'occupancy_status' => $unit->getOccupancyStatus(),
            'unit_image' => $unit->getUnitImage(),
            'number_of_images' => $unit->getNumberOfImages(),
            'image1' => $unit->getImage1(),
            'image2' => $unit->getImage2(),
            'image3' => $unit->getImage3(),
            'image4' => $unit->getImage4(),
            'image5' => $unit->getImage5(),
            'length' => $unit->getLength(),
            'breadth' => $unit->getBreadth(),
            'total_area' => $unit->getTotalArea(),
            'number_of_bedrooms' => $unit->getNumberOfBedrooms(),
            'number_of_bathrooms' => $unit->getNumberOfBathrooms(),
            'number_of_windows' => $unit->getNumberOfWindows(),
            'furnished' => $unit->getFurnished(),
            'equipped_with' => $unit->getEquippedWith(),
            'unit_feature' => $unit->getUnitFeature(),
            'camion_size' => $unit->getCamionSize(),
            'type_of_heating' => $unit->getTypeOfHeating(),
            'description' => $unit->getDescription(),
            'purchase_price' => $unit->getPurchasePrice(),
            'mortgage_balance' => $unit->getMortgageBalance(),
            'monthly_mortgage' => $unit->getMonthlyMortgage(),
            'property_tax' => $unit->getPropertyTax(),
            'unit_name' => $unit->getUnitName(),
            'building_name_id' => $unit->getBuildingNameId(),
            'unit_status' => $unit->getUnitStatus(),
            'location' => $unit->getLocation(),
            'region' => $unit->getRegion(),
            'land_length' => $unit->getLandLength(),
            'land_breadth' => $unit->getLandBreadth(),
            'unit_area' => $unit->getUnitArea(),
            'number_of_seats' => $unit->getNumberOfSeats(),
            'parking_space' => $unit->getParkingSpace(),
            'parking_type' => $unit->getParkingType(),
            'user_id' => $unit->getUser_id(),
        ];
    }
}
?>