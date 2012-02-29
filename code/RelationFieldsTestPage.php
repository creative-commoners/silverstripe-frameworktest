<?php

class RelationFieldsTestPage extends TestPage {
	
	static $has_one = array(
		"HasOneCompany" => "Company",
	);
	static $has_many = array(
		"HasManyCompanies" => "Company",
	);
	static $many_many = array(
		"ManyManyCompanies" => "Company",
	);
	
	function getCMSFields() {
		$fields = parent::getCMSFields();
		
		$fields->addFieldToTab("Root.CheckboxSet",
			new CheckboxSetField("CheckboxSet", "CheckboxSetField", TestCategory::map()));

		$fields->addFieldToTab("Root.CTF", 
			new ComplexTableField($this, "HasManyCompanies", "TestCTFItem")
		);

		// TODO Fix legacy relation CTFs in 3.0

		// $fields->addFieldToTab("Root.HasOneCTF", 
		// 	new HasOneComplexTableField($this, "HasOneCompany");

		// $fields->addFieldToTab("Root.HasManyCTF", 
		// 	new HasManyComplexTableField($this, "HasManyCompanies");

		// $fields->addFieldToTab("Root.ManyManyCTF", 
		// 	new ManyManyComplexTableField($this, "ManyManyCompanies");


//		$fields->addFieldToTab("Root.Tests.ComplexTableField", 
//			new CheckboxSetField("CheckboxSet", "CheckboxSetField", TestCategory::map()));
//		$fields->addFieldToTab("Root.Tests.CheckboxSet", new CheckboxSetField("CheckboxSet", "CheckboxSetField", TestCategory::map()));

		return $fields;
	}
}

class RelationFieldsTestPage_Controller extends TestPage_Controller {
	
}