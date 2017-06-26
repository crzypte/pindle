<?php

	class DbObject {
		
		protected $mysqli;
		
		public function __construct($mysqli) {
			$this->mysqli = $mysqli;
		}
		
		public function insert ($values) {
			//TODO htmlentities() on insert values
			$query = SQLUtil::buildInsertQuery($this->tableName, $values);
			if ($result = $this->mysqli->query($query)) {
				//echo 'The ID is: '.$this->mysqli->insert_id;
				$this->get($this->mysqli->insert_id);
				return $this->mysqli->insert_id;
			}
			return null;
		}
		
		//TODO Delete object
		
		public function update ($column, $value) {
			$value = $this->mysqli->real_escape_string($value);
			$valueString = (is_String($value)) ? "'" . $value . "'" : $value;
			$results = $this->mysqli->query("UPDATE " . $this->tableName. " SET $column = $valueString WHERE id =" . $this->id );
		}
		
		public function get($id){
			$this->id = $id;
			if ($result = $this->mysqli->query("SELECT * FROM " . $this->tableName . " WHERE id = " . $id . " LIMIT 1")) {
				$row = $result->fetch_assoc();
				foreach ($row as $key => $value) {
					$this->{$key} = $value;
				}
				$result->close();
			}
		}
		
		public function toJSON () {
			return json_encode($this);
		}
		
	}

?>