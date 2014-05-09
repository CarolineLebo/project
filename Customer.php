<?php
class Customer {

	
	private $firstName;
	private $lastName;
	private $phone;
	private $email;
	private $fax;
	private $physicalAddress;
	private $postalAddress;
	private $country;
	private $city;
	
	
	
	
	function setFirstName($firstName)
	{
		
		$this->firstName = $firstName;
	}
	
	function setLastName($lastName)
	{
		
		$this->lastName = $lastName;
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
	

	
	
	function getFirstName()
	{
		return $this->firstName;
	}
	
	function getLastName()
	{
		return $this->lastName;
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