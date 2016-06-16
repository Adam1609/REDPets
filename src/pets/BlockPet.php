<?php

namespace pets;

class BlockPet extends Pets {

	const NETWORK_ID = 66;

	public $width = 1.5;
	public $height = 2;

	public function getName() {
		return "BlockPet";
	}

	public function getSpeed() {
		return 0.8;
	}

}
