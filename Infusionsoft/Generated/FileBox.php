<?php
class Infusionsoft_Generated_FileBox extends Infusionsoft_Generated_Base{
    protected static $tableFields = array('Id', 'FileName', 'Extension', 'FileSize', 'ContactId', 'Public');
    
    
    public function __construct($id = null, $app = null){    	    	
    	parent::__construct('FileBox', $id, $app);    	    	
    }
    
    public function getFields(){
		return self::$tableFields;	
	}
	
	public function addCustomField($name){
		self::$tableFields[] = $name;
	}
}
