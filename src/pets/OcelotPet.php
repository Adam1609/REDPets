<?php

namespace pets;

class OcelotPet extends Pets {

	const NETWORK_ID = 22;
	
	const DATA_CAT_TYPE = 18;
	
	const TYPE_WILD = 0;

    public $width = 0.312;
    public $height = 0.75;

	public function getName() {
		return "OcelotPet";
	}

	public function getSpeed() {
		return 1.4;
	}

}
