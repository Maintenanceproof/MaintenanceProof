<?php

class Asset {
    private $id;
    private $propertyId;
    private $floor;
    private $location;
    private $emplacement;
    private $assetName;
    private $buildingComponent;
    private $assetType;
    private $modelNumber;
    private $assetStatus;
    private $relationship;
    private $master;
    private $warranty;
    private $installationDate;
    private $warrantyInfo;
    private $purchaseDate;
    private $serialNumber;
    private $lastMaintenanceDate;
    private $maintenanceRecords;
    private $manufacturer;
    private $supplier;
    private $supplierContact;
    private $lifeExpectancy;
    private $depreciation;
    private $purchaseCost;
    private $currentValue;
    private $maintenanceRep;
    private $maintenanceRepDate;
    private $notes;
    private $status;

    public function __construct(
        $id,
        $propertyId,
        $floor,
        $location,
        $emplacement,
        $assetName,
        $buildingComponent,
        $assetType,
        $modelNumber,
        $assetStatus,
        $relationship,
        $master,
        $warranty,
        $installationDate,
        $warrantyInfo,
        $purchaseDate,
        $serialNumber,
        $lastMaintenanceDate,
        $maintenanceRecords,
        $manufacturer,
        $supplier,
        $supplierContact,
        $lifeExpectancy,
        $depreciation,
        $purchaseCost,
        $currentValue,
        $maintenanceRep,
        $maintenanceRepDate,
        $notes,
        $status
    ) {
        $this->id = $id ?? null;
        $this->propertyId = $propertyId;
        $this->floor = $floor;
        $this->location = $location;
        $this->emplacement = $emplacement;
        $this->assetName = $assetName;
        $this->buildingComponent = $buildingComponent;
        $this->assetType = $assetType;
        $this->modelNumber = $modelNumber;
        $this->assetStatus = $assetStatus;
        $this->relationship = $relationship;
        $this->master = $master;
        $this->warranty = $warranty;
        $this->installationDate = $installationDate;
        $this->warrantyInfo = $warrantyInfo;
        $this->purchaseDate = $purchaseDate;
        $this->serialNumber = $serialNumber;
        $this->lastMaintenanceDate = $lastMaintenanceDate;
        $this->maintenanceRecords = $maintenanceRecords;
        $this->manufacturer = $manufacturer;
        $this->supplier = $supplier;
        $this->supplierContact = $supplierContact;
        $this->lifeExpectancy = $lifeExpectancy;
        $this->depreciation = $depreciation;
        $this->purchaseCost = $purchaseCost;
        $this->currentValue = $currentValue;
        $this->maintenanceRep = $maintenanceRep;
        $this->maintenanceRepDate = $maintenanceRepDate;
        $this->notes = $notes;
        $this->status = $status;
    }

    // Getter and setter methods for all properties...

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
        return $this->propertyId;
    }

    public function setPropertyId($propertyId)
    {
        $this->propertyId = $propertyId;
        return $this;
    }

    public function getFloor()
    {
        return $this->floor;
    }

    public function setFloor($floor)
    {
        $this->floor = $floor;
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

    public function getEmplacement()
    {
        return $this->emplacement;
    }

    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;
        return $this;
    }

    public function getAssetName()
    {
        return $this->assetName;
    }

    public function setAssetName($assetName)
    {
        $this->assetName = $assetName;
        return $this;
    }

    public function getBuildingComponent()
    {
        return $this->buildingComponent;
    }

    public function setBuildingComponent($buildingComponent)
    {
        $this->buildingComponent = $buildingComponent;
        return $this;
    }

    public function getAssetType()
    {
        return $this->assetType;
    }

    public function setAssetType($assetType)
    {
        $this->assetType = $assetType;
        return $this;
    }

    public function getModelNumber()
    {
        return $this->modelNumber;
    }

    public function setModelNumber($modelNumber)
    {
        $this->modelNumber = $modelNumber;
        return $this;
    }

    public function getAssetStatus()
    {
        return $this->assetStatus;
    }

    public function setAssetStatus($assetStatus)
    {
        $this->assetStatus = $assetStatus;
        return $this;
    }

    public function getRelationship()
    {
        return $this->relationship;
    }

    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    public function getMaster()
    {
        return $this->master;
    }

    public function setMaster($master)
    {
        $this->master = $master;
        return $this;
    }

    public function getWarranty()
    {
        return $this->warranty;
    }

    public function setWarranty($warranty)
    {
        $this->warranty = $warranty;
        return $this;
    }

    public function getInstallationDate()
    {
        return $this->installationDate;
    }

    public function setInstallationDate($installationDate)
    {
        $this->installationDate = $installationDate;
        return $this;
    }

    public function getWarrantyInfo()
    {
        return $this->warrantyInfo;
    }

    public function setWarrantyInfo($warrantyInfo)
    {
        $this->warrantyInfo = $warrantyInfo;
        return $this;
    }

    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;
        return $this;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    public function getLastMaintenanceDate()
    {
        return $this->lastMaintenanceDate;
    }

    public function setLastMaintenanceDate($lastMaintenanceDate)
    {
        $this->lastMaintenanceDate = $lastMaintenanceDate;
        return $this;
    }

    public function getMaintenanceRecords()
    {
        return $this->maintenanceRecords;
    }

    public function setMaintenanceRecords($maintenanceRecords)
    {
        $this->maintenanceRecords = $maintenanceRecords;
        return $this;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getSupplier()
    {
        return $this->supplier;
    }

    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
        return $this;
    }

    public function getSupplierContact()
    {
        return $this->supplierContact;
    }

    public function setSupplierContact($supplierContact)
    {
        $this->supplierContact = $supplierContact;
        return $this;
    }

    public function getLifeExpectancy()
    {
        return $this->lifeExpectancy;
    }

    public function setLifeExpectancy($lifeExpectancy)
    {
        $this->lifeExpectancy = $lifeExpectancy;
        return $this;
    }

    public function getDepreciation()
    {
        return $this->depreciation;
    }

    public function setDepreciation($depreciation)
    {
        $this->depreciation = $depreciation;
        return $this;
    }

    public function getPurchaseCost()
    {
        return $this->purchaseCost;
    }

    public function setPurchaseCost($purchaseCost)
    {
        $this->purchaseCost = $purchaseCost;
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

    public function getMaintenanceRep()
    {
        return $this->maintenanceRep;
    }

    public function setMaintenanceRep($maintenanceRep)
    {
        $this->maintenanceRep = $maintenanceRep;
        return $this;
    }

    public function getMaintenanceRepDate()
    {
        return $this->maintenanceRepDate;
    }

    public function setMaintenanceRepDate($maintenanceRepDate)
    {
        $this->maintenanceRepDate = $maintenanceRepDate;
        return $this;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
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

