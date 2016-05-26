<?php

namespace pets;

class EndermanPet extends Pets {

	const NETWORK_ID = 38;

	public $width = 0.3;
	public $height = 1.8;

	public function getName() {
		return "EndermanPet";
	}

	public function getSpeed() {
		return 1.2;
	}

}
