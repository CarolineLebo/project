<?php
class Product {

	private $productName;
	private $productDescription;
	private $lastName;
	private $companyName;
	private $phone;
	private $email;
	private $fax;
	private $physicalAddress;
	private $postalAddress;
	private $country;
	private $city;
	
	function setProductName($productName)
	{
		
		$this->productName = $productName;
	}
	
	function setProductDescription($productDescription)
	{
		
		$this->title = $productDescription;
	}
	
	
	
	function setLastName($lastName)
	{
		
		$this->lastName = $lastName;
	}
	
	function setCompanyName($companyName)
	{
		
		$this->CompanyName = $CompanyName;
	}
	
	function setPhone($phone)
	{
	
		$this->phone = $phone;
	}
	
	function setEmail($email)
	{
		
		$this->email = $email;
	}
	
	function setFax($fax)
	{
		
		$this->fax = $fax;
	}
	
	function setPhysicalAddress($physicalAddress)
	{
		
		$this->physicalAddress = $physicalAddress;
	}
	
	function setPostalAddress($postalAddress)
	{
	
		$this->postalAddress = $postalAddress;
	}
	
	function setCountry($country)
	{
		
		$this->country = $country;
	}
	
	function setCity($city)
	{
		
		$this->city = $city;
	}
	

	
	
	
	
	
	

	function getProductName()
	{
		
			return $this->productName;
	}
	
	function getProductDescription()
	{
		
			return $this->productDescription;
	}
	
	function getLastName()
	{
		return $this->lastName;
	}
	
	function getCompanyName()
	{
		return $this->companyName;
	}
	
	function getPhone()
	{
		return $this->phone;
	}
	
	
	function getEmail()
	{
		return $this->email;
	}
	
	
	
	function getFax()
	{
		return $this->fax;
	}
	
	
	function getPhysicalAddress()
	{
		return $this->physicalAddress;
	}
	
	
	function getPostalAddress()
	{
		return $this->postalAddress;
	}
	
	
	function getCountry()
	{
		return $this->country;
	}
	
	function getCity($city)
	{
		return $this->city;
	}
	
	}


?>