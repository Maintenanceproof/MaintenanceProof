<?php

class Property
{
    private $id;
    private $User_ID;
    private $propertyCategory;
    private $propertyType;
    private $propertyName;
    private $street;
    private $city;
    private $provinceState;
    private $zipCode;
    private $country;
    private $address;
    private $numberOfFloors;
    private $numberOfUnits;
    private $propertyImage;
    private $image1;
    private $image2;
    private $image3;
    private $image4;
    private $image5;
    private $length;
    private $breadth;
    private $height;
    private $depth;
    private $totalSquareFeet;
    private $currentValue;
    private $dateOfConstruction;
    private $buildingMaterialStructure;
    private $lastRenovationDate;
    private $propertyCertification;
    private $commonAreas;
    private $facilities;
    private $amenities;
    private $accessibility;
    private $securitySystem;
    private $accessControlSystem;
    private $parkingSpots;
    private $parkingFee;
    private $parkingAmount;
    private $parkingAmountMonthly;
    private $image;
    private $building_name;
    private $property_type;
    private $location;
    private $region;
    private $manager_id;
    private $land_breadth;
    private $land_length;
    private $square_feet;
    private $features_selection_list;
    private $building_certification;
    private $type_of_rent;
    private $rent;
    private $rate_per_square_feet;
    private $lease_date;
    private $status;

    public function __construct(
        $id,
        $User_ID,
        $propertyCategory,
        $propertyType,
        $propertyName,
        $street,
        $city,
        $provinceState,
        $zipCode,
        $country,
        $address,
        $numberOfFloors,
        $numberOfUnits,
        $propertyImage,
        $image1,
        $image2,
        $image3,
        $image4,
        $image5,
        $length,
        $breadth,
        $height,
        $depth,
        $totalSquareFeet,
        $currentValue,
        $dateOfConstruction,
        $buildingMaterialStructure,
        $lastRenovationDate,
        $propertyCertification,
        $commonAreas,
        $facilities,
        $amenities,
        $accessibility,
        $securitySystem,
        $accessControlSystem,
        $parkingSpots,
        $parkingFee,
        $parkingAmount,
        $parkingAmountMonthly,
        $image,
        $building_name,
        $property_type,
        $location,
        $region,
        $manager_id,
        $land_breadth,
        $land_length,
        $square_feet,
        $features_selection_list,
        $building_certification,
        $type_of_rent,
        $rent,
        $rate_per_square_feet,
        $lease_date,
        $status
    ) {
        $this->id = $id ?? null;
        $this->User_ID = $User_ID;
        $this->propertyCategory= $propertyCategory;
        $this->propertyType = $propertyType;
        $this->propertyName = $propertyName;
        $this->street = $street;
        $this->city = $city;
        $this->provinceState = $provinceState;
        $this->zipCode = $zipCode;
        $this->country = $country;
        $this->address = $address;
        $this->numberOfFloors = $numberOfFloors;
        $this->numberOfUnits = $numberOfUnits;
        $this->propertyImage = $propertyImage;
        $this->image1 = $image1;
        $this->image2 = $image2;
        $this->image3 = $image3;
        $this->image4 = $image4;
        $this->image5 = $image5;
        $this->length = $length;
        $this->breadth = $breadth;
        $this->height = $height;
        $this->depth = $depth;
        $this->totalSquareFeet = $totalSquareFeet;
        $this->currentValue = $currentValue;
        $this->dateOfConstruction = $dateOfConstruction;
        $this->buildingMaterialStructure = $buildingMaterialStructure;
        $this->lastRenovationDate = $lastRenovationDate;
        $this->propertyCertification = $propertyCertification;
        $this->commonAreas = $commonAreas;
        $this->facilities = $facilities;
        $this->amenities = $amenities;
        $this->accessibility = $accessibility;
        $this->securitySystem = $securitySystem;
        $this->accessControlSystem = $accessControlSystem;
        $this->parkingSpots = $parkingSpots;
        $this->parkingFee = $parkingFee;
        $this->parkingAmount = $parkingAmount;
        $this->parkingAmountMonthly = $parkingAmountMonthly;
        $this->image = $image;
        $this->building_name = $building_name;
        $this->property_type = $property_type;
        $this->location = $location;
        $this->region = $region;
        $this->manager_id = $manager_id;
        $this->land_breadth = $land_breadth;
        $this->land_length = $land_length;
        $this->square_feet = $square_feet;
        $this->features_selection_list = $features_selection_list;
        $this->building_certification = $building_certification;
        $this->type_of_rent = $type_of_rent;
        $this->rent = $rent;
        $this->rate_per_square_feet = $rate_per_square_feet;
        $this->lease_date = $lease_date;
        $this->status = $status;
    }

    # Getter's & Setter's for all properties...



    // Getter and Setter for $building_certification
    public function getBuildingCertification()
    {
        return $this->building_certification;
    }

    public function setBuildingCertification($building_certification)
    {
        $this->building_certification = $building_certification;
        return $this;
    }

    // Getter and Setter for $type_of_rent
    public function getTypeOfRent()
    {
        return $this->type_of_rent;
    }

    public function setTypeOfRent($type_of_rent)
    {
        $this->type_of_rent = $type_of_rent;
        return $this;
    }

    // Getter and Setter for $rent
    public function getRent()
    {
        return $this->rent;
    }

    public function setRent($rent)
    {
        $this->rent = $rent;
        return $this;
    }

    // Getter and Setter for $rate_per_square_feet
    public function getRatePerSquareFeet()
    {
        return $this->rate_per_square_feet;
    }

    public function setRatePerSquareFeet($rate_per_square_feet)
    {
        $this->rate_per_square_feet = $rate_per_square_feet;
        return $this;
    }



    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getUser_ID()
    {
        return $this->User_ID;
    }

    public function setUser_ID($User_ID)
    {
        $this->User_ID = $User_ID;
        return $this;
    }
    public function getPropertyCategory()
    {
        return $this->propertyCategory;
    }
    public function setPropertyCategory($propertyCategory)
    {
        $this->propertyCategory = $propertyCategory;
        return $this;
    }

    public function getPropertyType()
    {
        return $this->propertyType;
    }

    public function setPropertyType($propertyType)
    {
        $this->propertyType = $propertyType;
        return $this;
    }

    public function getPropertyName()
    {
        return $this->propertyName;
    }

    public function setPropertyName($propertyName)
    {
        $this->propertyName = $propertyName;
        return $this;
    }
    public function getStreet()
    {
        return $this->street;
    }
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
    public function getProvinceState()
    {
        return $this->provinceState;
    }
    public function setProvinceState($provinceState)
    {
        $this->provinceState = $provinceState;
        return $this;
    }
    public function getCountry()
    {
        return $this->country;
    }
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
    public function getZipCode()
    {
        return $this->zipCode;
    }
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function getNumberOfFloors()
    {
        return $this->numberOfFloors;
    }

    public function setNumberOfFloors($numberOfFloors)
    {
        $this->numberOfFloors = $numberOfFloors;
        return $this;
    }

    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    public function setNumberOfUnits($numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;
        return $this;
    }

    public function getPropertyImage()
    {
        return $this->propertyImage;
    }

    public function setPropertyImage($propertyImage)
    {
        $this->propertyImage = $propertyImage;
        return $this;
    }

    public function getImage1()
    {
        return $this->image1;
    }

    public function setImage1($image1)
    {
        $this->image1 = $image1;
        return $this;
    }

    public function getImage2()
    {
        return $this->image2;
    }

    public function setImage2($image2)
    {
        $this->image2 = $image2;
        return $this;
    }

    public function getImage3()
    {
        return $this->image3;
    }

    public function setImage3($image3)
    {
        $this->image3 = $image3;
        return $this;
    }

    public function getImage4()
    {
        return $this->image4;
    }

    public function setImage4($image4)
    {
        $this->image4 = $image4;
        return $this;
    }

    public function getImage5()
    {
        return $this->image5;
    }

    public function setImage5($image5)
    {
        $this->image5 = $image5;
        return $this;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    public function getBreadth()
    {
        return $this->breadth;
    }

    public function setBreadth($breadth)
    {
        $this->breadth = $breadth;
        return $this;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function getDepth()
    {
        return $this->depth;
    }

    public function setDepth($depth)
    {
        $this->depth = $depth;
        return $this;
    }

    public function getTotalSquareFeet()
    {
        return $this->totalSquareFeet;
    }

    public function setTotalSquareFeet($totalSquareFeet)
    {
        $this->totalSquareFeet = $totalSquareFeet;
        return $this;
    }

    public function getCurrentValue()
    {
        return $this->currentValue;
    }

    public function setCurrentValue($currentValue)
    {
        $this->currentValue = $currentValue;
        return $this;
    }

    public function getDateOfConstruction()
    {
        return $this->dateOfConstruction;
    }

    public function setDateOfConstruction($dateOfConstruction)
    {
        $this->dateOfConstruction = $dateOfConstruction;
        return $this;
    }

    public function getBuildingMaterialStructure()
    {
        return $this->buildingMaterialStructure;
    }

    public function setBuildingMaterialStructure($buildingMaterialStructure)
    {
        $this->buildingMaterialStructure = $buildingMaterialStructure;
        return $this;
    }

    public function getLastRenovationDate()
    {
        return $this->lastRenovationDate;
    }

    public function setLastRenovationDate($lastRenovationDate)
    {
        $this->lastRenovationDate = $lastRenovationDate;
        return $this;
    }

    public function getPropertyCertification()
    {
        return $this->propertyCertification;
    }

    public function setPropertyCertification($propertyCertification)
    {
        $this->propertyCertification = $propertyCertification;
        return $this;
    }

    public function getCommonAreas()
    {
        return $this->commonAreas;
    }

    public function setCommonAreas($commonAreas)
    {
        $this->commonAreas = $commonAreas;
        return $this;
    }

    public function getFacilities()
    {
        return $this->facilities;
    }

    public function setFacilities($facilities)
    {
        $this->facilities = $facilities;
        return $this;
    }

    public function getAmenities()
    {
        return $this->amenities;
    }

    public function setAmenities($amenities)
    {
        $this->amenities = $amenities;
        return $this;
    }

    public function getAccessibility()
    {
        return $this->accessibility;
    }

    public function setAccessibility($accessibility)
    {
        $this->accessibility = $accessibility;
        return $this;
    }

    public function getSecuritySystem()
    {
        return $this->securitySystem;
    }

    public function setSecuritySystem($securitySystem)
    {
        $this->securitySystem = $securitySystem;
        return $this;
    }

    public function getAccessControlSystem()
    {
        return $this->accessControlSystem;
    }

    public function setAccessControlSystem($accessControlSystem)
    {
        $this->accessControlSystem = $accessControlSystem;
        return $this;
    }

    public function getParkingSpots()
    {
        return $this->parkingSpots;
    }

    public function setParkingSpots($parkingSpots)
    {
        $this->parkingSpots = $parkingSpots;
        return $this;
    }

    public function getParkingFee()
    {
        return $this->parkingFee;
    }

    public function setParkingFee($parkingFee)
    {
        $this->parkingFee = $parkingFee;
        return $this;
    }

    public function getParkingAmount()
    {
        return $this->parkingAmount;
    }

    public function setParkingAmount($parkingAmount)
    {
        $this->parkingAmount = $parkingAmount;
        return $this;
    }

    public function getParkingAmountMonthly()
    {
        return $this->parkingAmountMonthly;
    }

    public function setParkingAmountMonthly($parkingAmountMonthly)
    {
        $this->parkingAmountMonthly = $parkingAmountMonthly;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    public function getBuildingName()
    {
        return $this->building_name;
    }

    public function setBuildingName($building_name)
    {
        $this->building_name = $building_name;
        return $this;
    }


    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    public function getManagerId()
    {
        return $this->manager_id;
    }

    public function setManagerId($manager_id)
    {
        $this->manager_id = $manager_id;
        return $this;
    }

 public function getLandBreadth()
    {
        return $this->land_breadth;
    }

    public function setLandBreadth($land_breadth)
    {
        $this->land_breadth = $land_breadth;
        return $this;
    }

    public function getLandLength()
    {
        return $this->land_length;
    }

    public function setLandLength($land_length)
    {
        $this->land_length = $land_length;
        return $this;
    }

    public function getSquareFeet()
    {
        return $this->square_feet;
    }

    public function setSquareFeet($square_feet)
    {
        $this->square_feet = $square_feet;
        return $this;
    }

    public function getFeaturesSelectionList()
    {
        return $this->features_selection_list;
    }

    public function setFeaturesSelectionList($features_selection_list)
    {
        $this->features_selection_list = $features_selection_list;
        return $this;
    }

    public function getLeaseDate()
    {
        return $this->lease_date;
    }

    public function setLeaseDate($lease_date)
    {
        $this->lease_date = $lease_date;
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}

?>
   
