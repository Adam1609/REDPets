<?php

namespace pets;

class SilverfishPet extends Pets {

	const NETWORK_ID = 39;

    public $width = 0.7;
    public $height = 0.7;

	public function getName() {
		return "SilverfishPet";
	}

	public function getSpeed() {
		return 1.4;
	}
	

}
