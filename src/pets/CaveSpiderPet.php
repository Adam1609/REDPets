<?php

namespace pets;

class CaveSpiderPet extends Pets {

	const NETWORK_ID = 40;

	public $width = 1;
	public $height = 0.5;

	public function getName() {
		return "CaveSpiderPet";
	}

	public function getSpeed() {
		return 0.9;
	}

}
