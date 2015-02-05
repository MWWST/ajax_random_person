<?php 

class Users extends CI_Controller { 

	public function random(){
	$names = array('John','Jimmy','Casey','Michael');
	$output = array('name' => $names[rand(0,count($names)-1)], "age" => rand(18,60));
	echo json_encode($output);
	}
}

?>