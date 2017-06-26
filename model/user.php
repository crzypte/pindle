<?php

class User extends DbObject { 
	
	public $id;
    public $name;

    protected $tableName = SQL_USER_TABLE_NAME;
    
    public function get($id) {
    	parent::get($id);
    	$thumbnail = new Image($this->mysqli);
    	if ($this->thumb != 0) {
    		$thumbnail->get($this->thumb);
    		$this->thumbnail = $thumbnail;
    	}
    }
    
}

?>