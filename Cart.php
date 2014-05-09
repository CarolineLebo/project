<?php
class Cart {

	private $numOfProducts;
	private $totalPrice;
	private $adminPassword;
	
	
	
	function setNumOfProducts($numOfProducts)
	{
		
		$this->numOfProducts = $numOfProducts;
	}
	
	function setTotalPrice($totalPrice)
	{
		
	$this->totalPrice = $totalPrice;
	}
	
	
	
	


	function getNumOfProducts()
	{
		return $this->numOfProducts;
	}
	
	function getTotalPrice()
	{
		return $this->totalPrice;
	}
	
	function getAdminPassword()
	{
		return $this->adminPassword;
	}
	
	
	
	
	}


?>