<?php

class PropertyManager extends DBManager {

    public function addProperty(Property $property) {
        $query = $this->db->prepare(
            "INSERT INTO property (
                User_ID, propertyCategory, propertyType, propertyName , street, city, provinceState, zipCode, country, address, numberOfFloors, numberOfUnits,
                propertyImage, image1, image2, image3, image4, image5,
                length, breadth, height, depth, totalSquareFeet, currentValue,
                dateOfConstruction, buildingMaterialStructure, lastRenovationDate,
                propertyCertification, commonAreas, facilities, amenities,
                accessibility, securitySystem, accessControlSystem, parkingSpots,
                parkingFee, parkingAmount, parkingAmountMonthly, image,
                building_name, property_type, location, region, manager_id,
                land_breadth, land_length, square_feet, features_selection_list,
                building_certification, type_of_rent, rent, rate_per_square_feet,
                lease_date, status
            ) VALUES (
                :User_ID, :propertyCategory, :propertyType, :propertyName, :street, :city, :provinceState,
                :zipCode, :country, :address, :numberOfFloors, :numberOfUnits,
                :propertyImage, :image1, :image2, :image3, :image4, :image5,
                :length, :breadth, :height, :depth, :totalSquareFeet, :currentValue,
                :dateOfConstruction, :buildingMaterialStructure, :lastRenovationDate,
                :propertyCertification, :commonAreas, :facilities, :amenities,
                :accessibility, :securitySystem, :accessControlSystem, :parkingSpots,
                :parkingFee, :parkingAmount, :parkingAmountMonthly, :image,
                :building_name, :property_type, :location, :region, :manager_id,
                :land_breadth, :land_length, :square_feet, :features_selection_list,
                :building_certification, :type_of_rent, :rent, :rate_per_square_feet,
                :lease_date, :status
            );"
        );

            return $query->execute( array(
        
        'User_ID' => $property->getUser_ID(),
        'propertyCategory' =>$property->getPropertyCategory(),
        'propertyType' => $property->getPropertyType(),
        'propertyName' => $property->getPropertyName(),
        'street' => $property->getStreet(),
        'city' => $property->getCity(),
        'provinceState' => $property->getProvinceState(),
        'zipCode' => $property->getZipCode(),
        'country' => $property->getCountry(),
        'address' => $property->getAddress(),
        'numberOfFloors' => $property->getNumberOfFloors(),
        'numberOfUnits' => $property->getNumberOfUnits(),
        'propertyImage' => $property->getPropertyImage(),
        'image1' => $property->getImage1(),
        'image2' => $property->getImage2(),
        'image3' => $property->getImage3(),
        'image4' => $property->getImage4(),
        'image5' => $property->getImage5(),
        'length' => ($property->getLength() !== null) ? (int)$property->getLength() : null,
        'breadth' => ($property->getBreadth() !== null) ? (int)$property->getBreadth() : null,
        'height' => $property->getHeight(),
        'depth' => $property->getDepth(),
        'totalSquareFeet' => $property->getTotalSquareFeet(),
        'currentValue' => $property->getCurrentValue(),
        'dateOfConstruction' => $property->getDateOfConstruction(),
        'buildingMaterialStructure' => $property->getBuildingMaterialStructure(),
        'lastRenovationDate' => $property->getLastRenovationDate(),
        'propertyCertification' => $property->getPropertyCertification(),
        'commonAreas' => $property->getCommonAreas(),
        'facilities' => $property->getFacilities(),
        'amenities' => $property->getAmenities(),
        'accessibility' => $property->getAccessibility(),
        'securitySystem' => $property->getSecuritySystem(),
        'accessControlSystem' => $property->getAccessControlSystem(),
        'parkingSpots' => $property->getParkingSpots(),
        'parkingFee' => $property->getParkingFee(),
        'parkingAmount' => $property->getParkingAmount(),
        'parkingAmountMonthly' => $property->getParkingAmountMonthly(),
        'image' => $property->getImage(),
        'building_name' => $property->getBuildingName(),
        'property_type' => $property->getPropertyType(),
        'location' => $property->getLocation(),
        'region' => $property->getRegion(),
        'manager_id' => $property->getManagerId(),
        'land_breadth' => $property->getLandBreadth(),
        'land_length' => $property->getLandLength(),
        'square_feet' => $property->getSquareFeet(),
        'features_selection_list' => $property->getFeaturesSelectionList(),
        'building_certification' => $property->getBuildingCertification(),
        'type_of_rent' => $property->getTypeOfRent(),
        'rent' => $property->getRent(),
        'rate_per_square_feet' => $property->getRatePerSquareFeet(),
        'lease_date' => $property->getLeaseDate(),
        'status' => $property->getStatus(),
            ) );

    }

    public function editProperty(Property $property) {
    $query = $this->db->prepare(
        "UPDATE `property` SET
        propertyCategory = :propertyCategory,propertyType = :propertyType, propertyName = :propertyName,
        street = :street,city = :city, provinceState = :provinceState, zipCode = :zipCode,
        country = :country,  address = :address,
        numberOfFloors = :numberOfFloors, numberOfUnits = :numberOfUnits,
        length = :length, breadth = :breadth, height = :height, depth = :depth, totalSquareFeet = :totalSquareFeet,
        currentValue = :currentValue, dateOfConstruction = :dateOfConstruction,
        buildingMaterialStructure = :buildingMaterialStructure,
        lastRenovationDate = :lastRenovationDate,
        commonAreas = :commonAreas, facilities = :facilities, amenities = :amenities,
        accessibility = :accessibility, securitySystem = :securitySystem,
        accessControlSystem = :accessControlSystem, parkingSpots = :parkingSpots,
        parkingFee = :parkingFee, parkingAmount = :parkingAmount,
        parkingAmountMonthly = :parkingAmountMonthly,
        building_name = :building_name, property_type = :property_type,
        location = :location, region = :region, manager_id = :manager_id,
        land_breadth = :land_breadth, land_length = :land_length,
        square_feet = :square_feet, features_selection_list = :features_selection_list,
        building_certification = :building_certification,
        type_of_rent = :type_of_rent, rent = :rent,
        rate_per_square_feet = :rate_per_square_feet,
        lease_date = :lease_date, status = :status WHERE `ID` = :id"
    );

    return $query->execute(array(
        'id' => $property->getId(),
        'propertyCategory' => $property->getPropertyCategory(),
        'propertyType' => $property->getPropertyType(),
        'propertyName' => $property->getPropertyName(),
        'street' => $property->getStreet(),
        'city' => $property->getCity(),
        'provinceState' => $property->getProvinceState(),
        'zipCode' => $property->getZipCode(),
        'country' => $property->getCountry(),
        'address' => $property->getAddress(),
        'numberOfFloors' => $property->getNumberOfFloors(),
        'numberOfUnits' => $property->getNumberOfUnits(),
        'length' => $property->getLength(),
        'breadth' => $property->getBreadth(),
        'height' => $property->getHeight(),
        'depth' => $property->getDepth(),
        'totalSquareFeet' => $property->getTotalSquareFeet(),
        'currentValue' => $property->getCurrentValue(),
        'dateOfConstruction' => $property->getDateOfConstruction(),
        'buildingMaterialStructure' => $property->getBuildingMaterialStructure(),
        'lastRenovationDate' => $property->getLastRenovationDate(),
        'commonAreas' => $property->getCommonAreas(),
        'facilities' => $property->getFacilities(),
        'amenities' => $property->getAmenities(),
        'accessibility' => $property->getAccessibility(),
        'securitySystem' => $property->getSecuritySystem(),
        'accessControlSystem' => $property->getAccessControlSystem(),
        'parkingSpots' => $property->getParkingSpots(),
        'parkingFee' => $property->getParkingFee(),
        'parkingAmount' => $property->getParkingAmount(),
        'parkingAmountMonthly' => $property->getParkingAmountMonthly(),
        'building_name' => $property->getBuildingName(),
        'property_type' => $property->getPropertyType(),
        'location' => $property->getLocation(),
        'region' => $property->getRegion(),
        'manager_id' => $property->getManagerId(),
        'land_breadth' => $property->getLandBreadth(),
        'land_length' => $property->getLandLength(),
        'square_feet' => $property->getSquareFeet(),
        'features_selection_list' => $property->getFeaturesSelectionList(),
        'building_certification' => $property->getBuildingCertification(),
        'type_of_rent' => $property->getTypeOfRent(),
        'rent' => $property->getRent(),
        'rate_per_square_feet' => $property->getRatePerSquareFeet(),
        'lease_date' => $property->getLeaseDate(),
        'status' => $property->getStatus(),
    ));
}

    public function deleteProperty($propertyId) {
        $query = $this->db->prepare("DELETE FROM `property` WHERE `id` = :id");
        return $query->execute(['id' => $propertyId]);
    }

}

?>
