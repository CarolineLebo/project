<?php
class Category {

	private $categoryName;
	private $description;
	
	
	
	
	function setCategoryName($categoryName)
	{
		
		$this->categoryName = $categoryName;
	}
	
	function setDescription($description)
	{
		
		$this->description = $description;
	}
	



	function getCategoryName()
	{
		return $this->categoryName;
	}
	
	function getDescription()
	{
		return $this->description;
	}
	
	
	
	
	
	
	}


?>