<?php
// Class that provides methods for working with the form data.
// There should be NOTHING in this file except this class definition.

class SimpleController {
	private $mapper;
	
	public function __construct() {
		global $f3;						// needed for $f3->get() 
		$this->mapper = new DB\SQL\Mapper($f3->get('DB'),"carbonInFood");	// create DB query mapper object
																			// for the "simpleModel" table
	}
	
	public function putIntoDatabase($data) {	
		$this->mapper->name = $data["name"];					// set value for "name" field
		$this->mapper->colour = $data["colour"];				// set value for "colour" field
		$this->mapper->save();									// save new record with these fields
	}
	
	public function getData() {
        $list=array_map(array($this->mapper,'cast'), $this->mapper->find(array('id=?', 1)));
		//return $list;
		return "test";
	}
    
    public function getResults($food, $frequency) {
        
        $this->mapper->load(array('food=? and frequency=?', $food, $frequency));
        $row£= array();
        $row["gGE"] = $this->mapper->greehouseGasEmission;
        $row["car"] = $this->mapper->car;
        $row["houseHeating"] = $this->mapper->houseHeating;
		return $row;
	}
    
    
    public function getResults2($food, $frequency) {
        
        $list=$this->mapper->find(array('food=? and frequency=?', $food, $frequency));
		return $list;
	}
	
	public function deleteFromDatabase($idToDelete) {
		$this->mapper->load(['id=?', $idToDelete]);				// load DB record matching the given ID
		$this->mapper->erase();									// delete the DB record
	}
	
}

?>
