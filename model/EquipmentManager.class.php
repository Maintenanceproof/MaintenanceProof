<?php

class EquipmentManager extends DBManager {

    public function addEquipment(Equipment $equipment) {
        $query = $this->db->prepare(
            "INSERT INTO assets (
                    user_id, propertyId, floor, location, emplacement, assetName, buildingComponent, assetType, modelNumber, assetStatus, relationship, image, warranty, installationDate, warrantyInfo, purchaseDate, serialNumber, lastMaintenanceDate, maintenanceRecords, manufacturer, supplier, supplierContact, lifeExpectancy, depreciation, purchaseCost, currentValue, maintenanceRep, maintenanceRepDate, notes, status
            ) VALUES (
                    :user_id,:propertyId,:floor,:location,:emplacement,:assetName,:buildingComponent,:assetType,:modelNumber,:assetStatus,:relationship,:image,:warranty,:installationDate,:warrantyInfo,:purchaseDate,:serialNumber,:lastMaintenanceDate,:maintenanceRecords,:manufacturer,:supplier,:supplierContact,:lifeExpectancy,:depreciation,:purchaseCost,:currentValue,:maintenanceRep,:maintenanceRepDate,:notes,:status
            );"
        );

         return $query->execute( array(
            'user_id' => $equipment->getUser_id(),
            'propertyId' => $equipment->getPropertyId(),
            'floor' => $equipment->getFloor(),
            'location' => $equipment->getLocation(),
            'emplacement' => $equipment->getEmplacement(),
            'assetName' => $equipment->getAssetName(),
            'buildingComponent' => $equipment->getBuildingComponent(),
            'assetType' => $equipment->getAssetType(),
            'modelNumber' => $equipment->getModelNumber(),
            'assetStatus' => $equipment->getAssetStatus(),
            'relationship' => $equipment->getRelationship(),
            'image' => $equipment->getImage(),
            'warranty' => $equipment->getWarranty(),
            'installationDate' => $equipment->getInstallationDate(),
            'warrantyInfo' => $equipment->getWarrantyInfo(),
            'purchaseDate' => $equipment->getPurchaseDate(),
            'serialNumber' => $equipment->getSerialNumber(),
            'lastMaintenanceDate' => $equipment->getLastMaintenanceDate(),
            'maintenanceRecords' => $equipment->getMaintenanceRecords(),
            'manufacturer' => $equipment->getManufacturer(),
            'supplier' => $equipment->getSupplier(),
            'supplierContact' => $equipment->getSupplierContact(),
            'lifeExpectancy' => $equipment->getLifeExpectancy(),
            'depreciation' => $equipment->getDepreciation(),
            'purchaseCost' => $equipment->getPurchaseCost(),
            'currentValue' => $equipment->getCurrentValue(),
            'maintenanceRep' => $equipment->getMaintenanceRep(),
            'maintenanceRepDate' => $equipment->getMaintenanceRepDate(),
            'notes' => $equipment->getNotes(),
            'status' => $equipment->getStatus(),
            
         ));
    }

    public function editEquipment(Equipment $equipment) {
        $query = $this->db->prepare(
            "UPDATE assets SET
                propertyId = :propertyId,floor = :floor,location = :location,emplacement = :emplacement,assetName = :assetName,buildingComponent = :buildingComponent,assetType = :assetType,modelNumber = :modelNumber,assetStatus = :assetStatus,relationship = :relationship,warranty = :warranty,installationDate = :installationDate,warrantyInfo = :warrantyInfo,purchaseDate = :purchaseDate,serialNumber = :serialNumber,lastMaintenanceDate = :lastMaintenanceDate,maintenanceRecords = :maintenanceRecords,manufacturer = :manufacturer,supplier = :supplier,supplierContact = :supplierContact,lifeExpectancy = :lifeExpectancy,depreciation = :depreciation,purchaseCost = :purchaseCost,currentValue = :currentValue,maintenanceRep = :maintenanceRep,maintenanceRepDate = :maintenanceRepDate,notes = :notes,status = :status
            WHERE id = :id;"
        );

         return $query->execute( array(
            'propertyId' => $equipment->getPropertyId(),
            'floor' => $equipment->getFloor(),
            'location' => $equipment->getLocation(),
            'emplacement' => $equipment->getEmplacement(),
            'assetName' => $equipment->getAssetName(),
            'buildingComponent' => $equipment->getBuildingComponent(),
            'assetType' => $equipment->getAssetType(),
            'modelNumber' => $equipment->getModelNumber(),
            'assetStatus' => $equipment->getAssetStatus(),
            'relationship' => $equipment->getRelationship(),
            'warranty' => $equipment->getWarranty(),
            'installationDate' => $equipment->getInstallationDate(),
            'warrantyInfo' => $equipment->getWarrantyInfo(),
            'purchaseDate' => $equipment->getPurchaseDate(),
            'serialNumber' => $equipment->getSerialNumber(),
            'lastMaintenanceDate' => $equipment->getLastMaintenanceDate(),
            'maintenanceRecords' => $equipment->getMaintenanceRecords(),
            'manufacturer' => $equipment->getManufacturer(),
            'supplier' => $equipment->getSupplier(),
            'supplierContact' => $equipment->getSupplierContact(),
            'lifeExpectancy' => $equipment->getLifeExpectancy(),
            'depreciation' => $equipment->getDepreciation(),
            'purchaseCost' => $equipment->getPurchaseCost(),
            'currentValue' => $equipment->getCurrentValue(),
            'maintenanceRep' => $equipment->getMaintenanceRep(),
            'maintenanceRepDate' => $equipment->getMaintenanceRepDate(),
            'notes' => $equipment->getNotes(),
            'status' => $equipment->getStatus(),
            'id' => $equipment->getId(),
         ));
    }

    public function deleteEquipment($equipmentID) {
        $query = $this->db->prepare("DELETE FROM assets WHERE id = :id;");
        return $query->execute(['id' => $equipmentID]);
    }

}

?>
