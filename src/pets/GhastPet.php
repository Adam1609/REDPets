<?php

namespace pets;

class GhastPet extends Pets {

	const NETWORK_ID = 41;

	public $width = 1;
	public $height = 1;

	public function getName() {
		return "GhastPet";
	}

	public function getSpeed() {
		return 0.9;
	}

}
