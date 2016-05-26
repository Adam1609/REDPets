<?php

namespace pets;

class CreeperPet extends Pets {

	const NETWORK_ID = 33;
	
	public $width = 0.4;
	public $height = 0.75;
	
	public function getName() {
		return "CreeperPet";
	}
	public function getSpeed() {
		return 1.2;
	}
}
