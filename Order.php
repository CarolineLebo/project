<?php
class Order {

	private $orderNum;
	private $orderDate;
	private $requiredDate;
	private $sheetDate;
	private $shippedDate;
	
	
	
	
	function setOrderNum($orderNum)
	{
		
		$this->orderNum = $orderNum;
	}
	
	function setOrderDate($orderDate)
	{
		
		$this->orderDate = $orderDate;
	}
	
	function setRequiredDate($requiredDate)
	{
		
		$this->requiredDate = $requiredDate;
	}
	
	function setSheetDate($sheetDate)
	{
		
		$this->sheetDate = $sheetDate;
	}
	
	function setShippedDate($shippedDate)
	{
	
		$this->shippedDate = $shippedDate;
	}
	
	

	function getOrderNum()
	{
		return $this->orderNum;
	}
	
	function getOrderDate()
	{
		return $this->orderDate;
	
	
	function getRequiredDate()
	{
		return $this->requiredDate;
	}
	
	function getSheetDate()
	{
		return $this->sheetDate;
	}
	
	function getShippedDate()
	{
		return $this->shippedDate;
	}
	
	
	
	
	}


?>