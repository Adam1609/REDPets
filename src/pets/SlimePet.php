<?php

namespace pets;

class SlimePet extends Pets {

	const NETWORK_ID = 37;
	
	const DATA_SLIME_SIZE = 16;

	public $width = 0.3;
	public $height = 5;

	public function getName() {
		return "SlimePet";
	}

	public function getSpeed() {
		return 1.2;
	}

}
