<?php

namespace pets;

class SilverfishPet extends Pets {

	const NETWORK_ID = 39;

	public $width = 0.6;
	public $height = 0.6;
	
	public function getName() {
		return "SilverfishPet";
	}

	public function getSpeed() {
		return 1.5;
	}
	

}
