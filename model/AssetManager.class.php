<?php

class AssetManager extends DBManager {

    public function addAsset(Asset $asset) {
        $query = $this->db->prepare(
            "INSERT INTO assets (
                id, propertyId, floor, location, emplacement, assetName, buildingComponent, assetType, modelNumber,
                assetStatus, relationship, master, warranty, installationDate, warrantyInfo, purchaseDate, serialNumber,
                lastMaintenanceDate, maintenanceRecords, manufacturer, supplier, supplierContact, lifeExpectancy,
                depreciation, purchaseCost, currentValue, maintenanceRep, maintenanceRepDate, notes, status
            ) VALUES (
                :id, :propertyId, :floor, :location, :emplacement, :assetName, :buildingComponent, :assetType, :modelNumber,
                :assetStatus, :relationship, :master, :warranty, :installationDate, :warrantyInfo, :purchaseDate, :serialNumber,
                :lastMaintenanceDate, :maintenanceRecords, :manufacturer, :supplier, :supplierContact, :lifeExpectancy,
                :depreciation, :purchaseCost, :currentValue, :maintenanceRep, :maintenanceRepDate, :notes, :status
            );"
        );

        return $query->execute($this->getAssetParams($asset));
    }

    public function editAsset(Asset $asset) {
        $query = $this->db->prepare(
            "UPDATE assets SET
                propertyId = :propertyId, floor = :floor, location = :location, emplacement = :emplacement, assetName = :assetName,
                buildingComponent = :buildingComponent, assetType = :assetType, modelNumber = :modelNumber, assetStatus = :assetStatus,
                relationship = :relationship, master = :master, warranty = :warranty, installationDate = :installationDate,
                warrantyInfo = :warrantyInfo, purchaseDate = :purchaseDate, serialNumber = :serialNumber,
                lastMaintenanceDate = :lastMaintenanceDate, maintenanceRecords = :maintenanceRecords, manufacturer = :manufacturer,
                supplier = :supplier, supplierContact = :supplierContact, lifeExpectancy = :lifeExpectancy,
                depreciation = :depreciation, purchaseCost = :purchaseCost, currentValue = :currentValue,
                maintenanceRep = :maintenanceRep, maintenanceRepDate = :maintenanceRepDate, notes = :notes, status = :status
            WHERE id = :id;"
        );

        $params = $this->getAssetParams($asset);
        $params['id'] = $asset->getId();

        return $query->execute($params);
    }

    public function deleteAsset($assetId) {
        $query = $this->db->prepare("DELETE FROM assets WHERE id = :id;");
        return $query->execute(['id' => $assetId]);
    }

    private function getAssetParams(Asset $asset) {
        return [
            'id' => $asset->getId(),
            'propertyId' => $asset->getPropertyId(),
            'floor' => $asset->getFloor(),
            'location' => $asset->getLocation(),
            'emplacement' => $asset->getEmplacement(),
            'assetName' => $asset->getAssetName(),
            'buildingComponent' => $asset->getBuildingComponent(),
            'assetType' => $asset->getAssetType(),
            'modelNumber' => $asset->getModelNumber(),
            'assetStatus' => $asset->getAssetStatus(),
            'relationship' => $asset->getRelationship(),
            'master' => $asset->getMaster(),
            'warranty' => $asset->getWarranty(),
            'installationDate' => $asset->getInstallationDate(),
            'warrantyInfo' => $asset->getWarrantyInfo(),
            'purchaseDate' => $asset->getPurchaseDate(),
            'serialNumber' => $asset->getSerialNumber(),
            'lastMaintenanceDate' => $asset->getLastMaintenanceDate(),
            'maintenanceRecords' => $asset->getMaintenanceRecords(),
            'manufacturer' => $asset->getManufacturer(),
            'supplier' => $asset->getSupplier(),
            'supplierContact' => $asset->getSupplierContact(),
            'lifeExpectancy' => $asset->getLifeExpectancy(),
            'depreciation' => $asset->getDepreciation(),
            'purchaseCost' => $asset->getPurchaseCost(),
            'currentValue' => $asset->getCurrentValue(),
            'maintenanceRep' => $asset->getMaintenanceRep(),
            'maintenanceRepDate' => $asset->getMaintenanceRepDate(),
            'notes' => $asset->getNotes(),
            'status' => $asset->getStatus(),
        ];
    }
}

?>
