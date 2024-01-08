<?php

class InventoryManager extends DBManager {

    public function addInventory(Inventory $inventory) {
        $query = $this->db->prepare(
            "INSERT INTO inventory (
                    user_id , image, property_id, type_of_inventory, name, code, stock_owner, product_active, vendor_id, manufacturer_id, cost, retail_price, estimated_labor, quantity, description, status
            ) VALUES (
                    :user_id, :image, :property_id, :type_of_inventory, :name, :code, :stock_owner, :product_active, :vendor_id, :manufacturer_id, :cost, :retail_price, :estimated_labor, :quantity, :description, :status
            );"
        );

         return $query->execute( array(
            'user_id' => $inventory->getUser_id(),
            'image' => $inventory->getImage(),
            'property_id' => $inventory->getPropertyId(),
            'type_of_inventory' => $inventory->getTypeOfInventory(),
            'name' => $inventory->getName(),
            'code' => $inventory->getCode(),
            'stock_owner' => $inventory->getStockOwner(),
            'product_active' => $inventory->getProductActive(),
            'vendor_id' => $inventory->getVendorId(),
            'manufacturer_id' => $inventory->getManufacturerId(),
            'cost' => $inventory->getCost(),
            'retail_price' => $inventory->getRetailPrice(),
            'estimated_labor' => $inventory->getEstimatedLabor(),
            'quantity' => $inventory->getQuantity(),
            'description' => $inventory->getDescription(),
            'status' => $inventory->getStatus(),

         ));
    }

    public function editInventory(Inventory $inventory) {
        $query = $this->db->prepare(
            "UPDATE inventory SET
                property_id = :property_id, type_of_inventory = :type_of_inventory, name = :name, code = :code, stock_owner = :stock_owner, product_active = :product_active, vendor_id = :vendor_id, manufacturer_id = :manufacturer_id, cost = :cost, retail_price = :retail_price, estimated_labor = :estimated_labor, quantity = :quantity, description = :description
            WHERE id = :id;"
        );

         return $query->execute( array(
            'property_id' => $inventory->getPropertyId(),
            'type_of_inventory' => $inventory->getTypeOfInventory(),
            'name' => $inventory->getName(),
            'code' => $inventory->getCode(),
            'stock_owner' => $inventory->getStockOwner(),
            'product_active' => $inventory->getProductActive(),
            'vendor_id' => $inventory->getVendorId(),
            'manufacturer_id' => $inventory->getManufacturerId(),
            'cost' => $inventory->getCost(),
            'retail_price' => $inventory->getRetailPrice(),
            'estimated_labor' => $inventory->getEstimatedLabor(),
            'quantity' => $inventory->getQuantity(),
            'description' => $inventory->getDescription(),
            'id' => $inventory->getId(),
         ));
    }

    public function deleteInventory($inventoryID) {
        $query = $this->db->prepare("DELETE FROM inventory WHERE id = :id;");
        return $query->execute(['id' => $inventoryID]);
    }

    // private function getInventoryParams(Inventory $inventory) {
    //     return [
    //         'id' => $inventory->getId(),
    //         'image' => $inventory->getImage(),
    //         'property_id' => $inventory->getPropertyId(),
    //         'type_of_inventory' => $inventory->getTypeOfInventory(),
    //         'name' => $inventory->getName(),
    //         'code' => $inventory->getCode(),
    //         'stock_owner' => $inventory->getStockOwner(),
    //         'product_active' => $inventory->getProductActive(),
    //         'vendor_id' => $inventory->getVendorId(),
    //         'manufacturer_id' => $inventory->getManufacturerId(),
    //         'cost' => $inventory->getCost(),
    //         'retail_price' => $inventory->getRetailPrice(),
    //         'estimated_labor' => $inventory->getEstimatedLabor(),
    //         'quantity' => $inventory->getQuantity(),
    //         'description' => $inventory->getDescription(),
    //         'status' => $inventory->getStatus(),
    //     ];
    // }
}

?>
