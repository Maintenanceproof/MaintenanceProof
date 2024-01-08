<?php

/**
 * Class For Unit
 * @author JD <jd@maintenanceproof.com>
 */
class Unit
{
    private $id;
    private $property_id;
    private $unit_number;
    private $unit_type;
    private $floor_number;
    private $address;
    private $occupancy_status;
    private $unit_image;
    private $number_of_images;
    private $image1;
    private $image2;
    private $image3;
    private $image4;
    private $image5;
    private $length;
    private $breadth;
    private $total_area;
    private $number_of_bedrooms;
    private $number_of_bathrooms;
    private $number_of_windows;
    private $furnished;
    private $equipped_with;
    private $unit_feature;
    private $camion_size;
    private $type_of_heating;
    private $description;
    private $purchase_price;
    private $mortgage_balance;
    private $monthly_mortgage;
    private $property_tax;
    private $unit_name;
    private $building_name_id;
    private $unit_status;
    private $location;
    private $region;
    private $land_length;
    private $land_breadth;
    private $unit_area;
    private $number_of_seats;
    private $parking_space;
    private $parking_type;
    private $user_id;

    public function __construct(
        $id,
        $property_id,
        $unit_number,
        $unit_type,
        $floor_number,
        $address,
        $occupancy_status,
        $unit_image,
        $number_of_images,
        $image1,
        $image2,
        $image3,
        $image4,
        $image5,
        $length,
        $breadth,
        $total_area,
        $number_of_bedrooms,
        $number_of_bathrooms,
        $number_of_windows,
        $furnished,
        $equipped_with,
        $unit_feature,
        $camion_size,
        $type_of_heating,
        $description,
        $purchase_price,
        $mortgage_balance,
        $monthly_mortgage,
        $property_tax,
        $unit_name,
        $building_name_id,
        $unit_status,
        $location,
        $region,
        $land_length,
        $land_breadth,
        $unit_area,
        $number_of_seats,
        $parking_space,
        $parking_type,
        $user_id
    ) {
        $this->id = $id ?? null;
        $this->property_id = $property_id;
        $this->unit_number = $unit_number;
        $this->unit_type = $unit_type;
        $this->floor_number = $floor_number;
        $this->address = $address;
        $this->occupancy_status = $occupancy_status;
        $this->unit_image = $unit_image;
        $this->number_of_images = $number_of_images;
        $this->image1 = $image1;
        $this->image2 = $image2;
        $this->image3 = $image3;
        $this->image4 = $image4;
        $this->image5 = $image5;
        $this->length = $length;
        $this->breadth = $breadth;
        $this->total_area = $total_area;
        $this->number_of_bedrooms = $number_of_bedrooms;
        $this->number_of_bathrooms = $number_of_bathrooms;
        $this->number_of_windows = $number_of_windows;
        $this->furnished = $furnished;
        $this->equipped_with = $equipped_with;
        $this->unit_feature = $unit_feature;
        $this->camion_size = $camion_size;
        $this->type_of_heating = $type_of_heating;
        $this->description = $description;
        $this->purchase_price = $purchase_price;
        $this->mortgage_balance = $mortgage_balance;
        $this->monthly_mortgage = $monthly_mortgage;
        $this->property_tax = $property_tax;
        $this->unit_name = $unit_name;
        $this->building_name_id = $building_name_id;
        $this->unit_status = $unit_status;
        $this->location = $location;
        $this->region = $region;
        $this->land_length = $land_length;
        $this->land_breadth = $land_breadth;
        $this->unit_area = $unit_area;
        $this->number_of_seats = $number_of_seats;
        $this->parking_space = $parking_space;
        $this->parking_type = $parking_type;
        $this->user_id = $user_id;
    }

    # Getter's & Setter's for all unit...

    public function getUser_id()
    {
        return $this->user_id;
    }

    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
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

    public function getPropertyId()
    {
        return $this->property_id;
    }

    public function setPropertyId($property_id)
    {
        $this->property_id = $property_id;
        return $this;
    }

    public function getUnitNumber()
    {
        return $this->unit_number;
    }

    public function setUnitNumber($unit_number)
    {
        $this->unit_number = $unit_number;
        return $this;
    }

    public function getUnitType()
    {
        return $this->unit_type;
    }

    public function setUnitType($unit_type)
    {
        $this->unit_type = $unit_type;
        return $this;
    }

    public function getFloorNumber()
    {
        return $this->floor_number;
    }

    public function setFloorNumber($floor_number)
    {
        $this->floor_number = $floor_number;
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

    public function getOccupancyStatus()
    {
        return $this->occupancy_status;
    }

    public function setOccupancyStatus($occupancy_status)
    {
        $this->occupancy_status = $occupancy_status;
        return $this;
    }

    public function getUnitImage()
    {
        return $this->unit_image;
    }

    public function setUnitImage($unit_image)
    {
        $this->unit_image = $unit_image;
        return $this;
    }

    public function getNumberOfImages()
    {
        return $this->number_of_images;
    }

    public function setNumberOfImages($number_of_images)
    {
        $this->number_of_images = $number_of_images;
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

    public function getTotalArea()
    {
        return $this->total_area;
    }

    public function setTotalArea($total_area)
    {
        $this->total_area = $total_area;
        return $this;
    }

    public function getNumberOfBedrooms()
    {
        return $this->number_of_bedrooms;
    }

    public function setNumberOfBedrooms($number_of_bedrooms)
    {
        $this->number_of_bedrooms = $number_of_bedrooms;
        return $this;
    }

    public function getNumberOfBathrooms()
    {
        return $this->number_of_bathrooms;
    }

    public function setNumberOfBathrooms($number_of_bathrooms)
    {
        $this->number_of_bathrooms = $number_of_bathrooms;
        return $this;
    }

    public function getNumberOfWindows()
    {
        return $this->number_of_windows;
    }

    public function setNumberOfWindows($number_of_windows)
    {
        $this->number_of_windows = $number_of_windows;
        return $this;
    }

    public function getFurnished()
    {
        return $this->furnished;
    }

    public function setFurnished($furnished)
    {
        $this->furnished = $furnished;
        return $this;
    }

    public function getEquippedWith()
    {
        return $this->equipped_with;
    }

    public function setEquippedWith($equipped_with)
    {
        $this->equipped_with = $equipped_with;
        return $this;
    }

    public function getUnitFeature()
    {
        return $this->unit_feature;
    }

    public function setUnitFeature($unit_feature)
    {
        $this->unit_feature = $unit_feature;
        return $this;
    }

    public function getCamionSize()
    {
        return $this->camion_size;
    }

    public function setCamionSize($camion_size)
    {
        $this->camion_size = $camion_size;
        return $this;
    }

    public function getTypeOfHeating()
    {
        return $this->type_of_heating;
    }

        public function setTypeOfHeating($type_of_heating)
    {
        $this->type_of_heating = $type_of_heating;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getPurchasePrice()
    {
        return $this->purchase_price;
    }

    public function setPurchasePrice($purchase_price)
    {
        $this->purchase_price = $purchase_price;
        return $this;
    }

    public function getMortgageBalance()
    {
        return $this->mortgage_balance;
    }

    public function setMortgageBalance($mortgage_balance)
    {
        $this->mortgage_balance = $mortgage_balance;
        return $this;
    }

    public function getMonthlyMortgage()
    {
        return $this->monthly_mortgage;
    }

    public function setMonthlyMortgage($monthly_mortgage)
    {
        $this->monthly_mortgage = $monthly_mortgage;
        return $this;
    }

    public function getPropertyTax()
    {
        return $this->property_tax;
    }

    public function setPropertyTax($property_tax)
    {
        $this->property_tax = $property_tax;
        return $this;
    }

    public function getUnitName()
    {
        return $this->unit_name;
    }

    public function setUnitName($unit_name)
    {
        $this->unit_name = $unit_name;
        return $this;
    }

    public function getBuildingNameId()
    {
        return $this->building_name_id;
    }

    public function setBuildingNameId($building_name_id)
    {
        $this->building_name_id = $building_name_id;
        return $this;
    }

    public function getUnitStatus()
    {
        return $this->unit_status;
    }

    public function setUnitStatus($unit_status)
    {
        $this->unit_status = $unit_status;
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

    public function getLandLength()
    {
        return $this->land_length;
    }

    public function setLandLength($land_length)
    {
        $this->land_length = $land_length;
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

    public function getUnitArea()
    {
        return $this->unit_area;
    }

    public function setUnitArea($unit_area)
    {
        $this->unit_area = $unit_area;
        return $this;
    }

    public function getNumberOfSeats()
    {
        return $this->number_of_seats;
    }

    public function setNumberOfSeats($number_of_seats)
    {
        $this->number_of_seats = $number_of_seats;
        return $this;
    }

    public function getParkingSpace()
    {
        return $this->parking_space;
    }

    public function setParkingSpace($parking_space)
    {
        $this->parking_space = $parking_space;
        return $this;
    }

    public function getParkingType()
    {
        return $this->parking_type;
    }

    public function setParkingType($parking_type)
    {
        $this->parking_type = $parking_type;
        return $this;
    }
}
?>


   
