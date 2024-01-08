<?php
	/**
	 * Class For User
	 * @author JD <jd@maintenanceproof.com>
	 */

	class User {
	private $User_ID;
	private $Name;
	private $Password;
	private $User_Type;
	private $Verification_Code;
	private $Status;
	private $Email;

		public function __construct($User_ID,$Name,$Password,$User_Type,$Email,$Verification_Code,$Status) {
			$this->User_ID 	          = $User_ID ?? null;
			$this->Name    		      = $Name;
			$this->Password   		  = $Password;
			$this->User_Type		  = $User_Type;
			$this->Verification_Code  = $Verification_Code ;
			$this->Status   		  = $Status;
			$this->Email   			  = $Email;	
		}

	#Getter's & Setter's
	public function getEmail()
	{
	    return $this->Email;
	}
	
	public function setEmail($Email)
	{
	    $this->Email = $Email;
	    return $this;
	}

	public function getStatus()
	{
	    return $this->Status;
	}
	
	public function setStatus($Status)
	{
	    $this->Status = $Status;
	    return $this;
	}

	public function getUser_Type()
	{
	    return $this->User_Type;
	}
	
	public function setUser_Type($User_Type)
	{
	    $this->User_Type = $User_Type;
	    return $this;
	}

	public function getName()
	{
	    return $this->Name;
	}
	
	public function setName($Name)
	{
	    $this->Name = $Name;
	    return $this;
	}

	public function getPassword()
	{
	    return $this->Password;
	}
	
	public function setPassword($Password)
	{
	    $this->Password = $Password;
	    return $this;
	}

	public function getVerification_Code()
	{
	    return $this->Verification_Code;
	}
	
	public function setVerification_Code($Verification_Code)
	{
	    $this->Verification_Code = $Verification_Code;
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


	}
?>