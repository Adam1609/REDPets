<?php

namespace pets;

class GhastPet extends Pets {

	const NETWORK_ID = 41;

	public $width = 6;
	public $height = 6;

	public function getName() {
		return "GhastPet";
	}

	public function getSpeed() {
		return 0.9;
	}

}
