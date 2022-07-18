<?php
namespace CB\Helloworld\Model;

class HEmployee {

	protected $helloWorldEmpList;
	public function __construct($userList = []){
		$this->helloWorldEmpList = $userList;
		echo "Hello world Module";

		print_r($this->helloWorldEmpList);
		die();
	}

	

}
