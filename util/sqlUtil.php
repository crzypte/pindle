<?php

class SQLUtil {
	
	public static function buildInsertQuery ($tableName, $values) {
    	$keyString = $valueString = "";
    	$firstKey = true;
    	foreach ($values as $key => $value) {
    		if (!$firstKey) {
    			$keyString .= ", ";
    			$valueString .= ", ";
    		}
    		$keyString .= $key;
    		if (is_string($value)) {
    			$value = "'" . $value . "'";
    		}
  			$valueString .= $value;
    		$firstKey = false;
    	}
    	return "INSERT INTO " . $tableName . "(" . $keyString . ") VALUES (" . $valueString . ")";
    }
}

?>