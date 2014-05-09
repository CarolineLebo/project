<?php
class Billing {

	private $billingAddress;
	private $billingDate;
	private $cardNum;
	private $cardExpDate;
	private $cardPin;
	
	
	
	function setBillingAddress($billingAddress)
	{
		
		$this->billingAddress = $billingAddress;
	}
	
	function setBillingDate($billingDateb)
	{
		
		$this->billingDate = $billingDate;
	}
	
	function setCardNum($cardNum)
	{
		
		$this->cardNum = $cardNum;
	
	
	function setCardExpDate($cardExpDate)
	{
		
		$this->cardExpDate = $cardExpDate;
	}
	
	function setCardPin($cardPin)
	{
	
		$this->cardPin = $cardPin;
	}
	
	
	

	function getBillingAddress()
	{
		return $this->billingAddressb;
	}
	
	function getBillingDate()
	{
		return $this->billingDate;
	}
	
	function getCardNum()
	{
		return $this->cardNum;
	}
	
	function getCardExpDate()
	{
		return $this->cardExpDate;
	}
	
	function getCardPin()
	{
		return $this->cardPin;
	}
	
	
	
	
	}


?>