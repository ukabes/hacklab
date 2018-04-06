<?php
namespace Hacklab;

use Medoo\Medoo;
/**
* 
*/
abstract class Data{
	
	protected $table;

	function __construct(){
		global $config;
		$this->database = new Medoo($config['database']);
	}

	public function create($data = array()){
		if (empty($data)) {
			return false;
		}		
		
		var_dump($this->database->insert($this->table, $data));
		return $this->getById($this->database->id());
	}

	public function update($id = NULL, $data = array()){
		if (is_null($id) or empty($array)) {
			return false;
		}

		$this->database->update($this->table, $data, ['id' => $id]);

		return $this->getById($id);
	}

	public function all($colums = '*'){
		return $this->database->select($this->table, $colums);
	}

	public function getById($id = NULL, $colums = '*'){
		if (is_null($id) ) {
			return false;
		}

		return $this->database->select($this->table, $colums, ['id' => $id]);
	}

	public function getByAny($any = NULL, $value = NULL){
		if (is_null($id) or is_null($id)) {
			return false;
		}

		return $this->database->get($this->table, $colums, [$any => $value]);
	}

	public function delete($id = NULL){
		if (is_null($id) ) {
			return false;
		}

		$this->database->delete($this->table, ['id' => $id]);
		return true;
	}
}