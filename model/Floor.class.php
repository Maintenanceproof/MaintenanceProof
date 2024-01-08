<?php
	/**
	 * Class For Floor
	 * @author JD <jd@maintenanceproof.com>
	 */

	class Floor {
	private $ID;
	private $Property_ID;
	private $block_id;
	private $Floor;
	private $status;

		public function __construct($ID, $Property_ID, $block_id, $Floor, $status) {
			$this->ID 	        = $ID ?? null;
			$this->Property_ID	= $Property_ID;
			$this->block_id   	= $block_id;
			$this->Floor  		= $Floor ;
			$this->status   	= $status;
		}

	#Getter's & Setter's
	public function getID()
	{
	    return $this->ID;
	}
	
	public function setID($ID)
	{
	    $this->ID = $ID;
	    return $this;
	}

	public function getProperty_ID()
	{
	    return $this->Property_ID;
	}
	
	public function setProperty_ID($Property_ID)
	{
	    $this->Property_ID = $Property_ID;
	    return $this;
	}

	public function getblock_id()
	{
	    return $this->block_id;
	}
	
	public function setblock_id($block_id)
	{
	    $this->block_id = $block_id;
	    return $this;
	}

	public function getFloor()
	{
	    return $this->Floor;
	}
	
	public function setFloor($Floor)
	{
	    $this->Floor = $Floor;
	    return $this;
	}

	public function getstatus()
	{
	    return $this->status;
	}
	
	public function setstatus($status)
	{
	    $this->status = $status;
	    return $this;
	}

	

	}
?>