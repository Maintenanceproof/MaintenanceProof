<?php

/**
 * Class for Inventory
 * @author JD <jd@maintenanceproof.com>
 */
class Inventory
{
    private $id;
    private $user_id;
    private $image;
    private $property_id;
    private $type_of_inventory;
    private $name;
    private $code;
    private $stock_owner;
    private $product_active;
    private $vendor_id;
    private $manufacturer_id;
    private $cost;
    private $retail_price;
    private $estimated_labor;
    private $quantity;
    private $description;
    private $status;

    public function __construct(
        $id,
        $user_id,
        $image,
        $property_id,
        $type_of_inventory,
        $name,
        $code,
        $stock_owner,
        $product_active,
        $vendor_id,
        $manufacturer_id,
        $cost,
        $retail_price,
        $estimated_labor,
        $quantity,
        $description,
        $status
    ) {
        $this->id = $id ?? null;
        $this->user_id = $user_id;
        $this->image = $image;
        $this->property_id = $property_id;
        $this->type_of_inventory = $type_of_inventory;
        $this->name = $name;
        $this->code = $code;
        $this->stock_owner = $stock_owner;
        $this->product_active = $product_active;
        $this->vendor_id = $vendor_id;
        $this->manufacturer_id = $manufacturer_id;
        $this->cost = $cost;
        $this->retail_price = $retail_price;
        $this->estimated_labor = $estimated_labor;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->status = $status;
    }

    # Getter's & Setter's for all properties...

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getUser_id()
    {
        return $this->user_id;
    }

    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
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

    public function getPropertyId()
    {
        return $this->property_id;
    }

    public function setPropertyId($property_id)
    {
        $this->property_id = $property_id;
        return $this;
    }

    public function getTypeOfInventory()
    {
        return $this->type_of_inventory;
    }

    public function setTypeOfInventory($type_of_inventory)
    {
        $this->type_of_inventory = $type_of_inventory;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    public function getStockOwner()
    {
        return $this->stock_owner;
    }

    public function setStockOwner($stock_owner)
    {
        $this->stock_owner = $stock_owner;
        return $this;
    }

    public function getProductActive()
    {
        return $this->product_active;
    }

    public function setProductActive($product_active)
    {
        $this->product_active = $product_active;
        return $this;
    }

    public function getVendorId()
    {
        return $this->vendor_id;
    }

    public function setVendorId($vendor_id)
    {
        $this->vendor_id = $vendor_id;
        return $this;
    }

    public function getManufacturerId()
    {
        return $this->manufacturer_id;
    }

    public function setManufacturerId($manufacturer_id)
    {
        $this->manufacturer_id = $manufacturer_id;
        return $this;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    public function getRetailPrice()
    {
        return $this->retail_price;
    }

    public function setRetailPrice($retail_price)
    {
        $this->retail_price = $retail_price;
        return $this;
    }

    public function getEstimatedLabor()
    {
        return $this->estimated_labor;
    }

    public function setEstimatedLabor($estimated_labor)
    {
        $this->estimated_labor = $estimated_labor;
        return $this;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
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
