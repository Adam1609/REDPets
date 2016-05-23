<?php

namespace pets\command;

use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pets\main;

class PetCommand extends PluginCommand {

	public function __construct(main $main, $name) {
		parent::__construct(
				$name, $main
		);
		$this->main = $main;
		$this->setPermission("pets.command");
		$this->setAliases(array("pet"));
	}

	public function execute(CommandSender $sender, $currentAlias, array $args) {
	
		if (!isset($args[0])) {
			$sender->sendMessage("Please use /pets help");
			return true;
		}
		switch (strtolower($args[0])){
			case "name":
				if (isset($args[1])){
					unset($args[0]);
					$name = implode(" ", $args);
					$this->main->getPet($sender->getName())->setNameTag($name);
					$sender->sendMessage("Set Name to ".$name);
				}
				else { 
				$sender->sendMessage("Usage /pets name (new name) : change the name");
				}
				return true;
			break;
			case "list":
				if($sender->hasPermission('pets.command.list')){
				$sender->sendMessage("§e======Pets List======");
				$sender->sendMessage("§e§ldog / wolf");
				$sender->sendMessage("§e§lblaze");
				$sender->sendMessage("§e§lpig");
				$sender->sendMessage("§e§lchicken");
				$sender->sendMessage("§e§lrabbit");
				$sender->sendMessage("§e§lmagma");
				$sender->sendMessage("§e§lbat");
				$sender->sendMessage("§e§lsilverfish");
				$sender->sendMessage("§e§lcat / ocelot");
				return true;
				}
				else{
				$sender->sendMessage("§4You do not have permission to use this command");
				 }
				return true;
			break;
			case "help":
				if($sender->hasPermission('pets.command.help')){
				$sender->sendMessage(TextFormat::Yellow."======PetHelp======");
				$sender->sendMessage(TextFormat::AQUA."/pets toggle - on/off your Pet");
				$sender->sendMessage(TextFormat::AQUA."/pets type [type]");
				$sender->sendMessage(TextFormat::AQUA."/pets name [petname]");
				$sender->sendMessage(TextFormat::AQUA."/pets list - list of all pets");
				return true;
				}
				else{
				$sender->sendMessage(TextFormat::RED."You do not have permission to use this command");
				 }
				return true;
			break;
			case "type":
				if (isset($args[1])){
					switch ($args[1]){
						case "wolf":
						case "dog":
							if ($sender->hasPermission("pets.type.dog")){
								$this->main->changePet($sender, "WolfPet");
								$sender->sendMessage("Your pet has changed to Wolf!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for dog pet!");
								return true;
							}
						break;
						case "chicken":
							if ($sender->hasPermission("pets.type.chicken")){
								$this->main->changePet($sender, "ChickenPet");
								$sender->sendMessage("Your pet has changed to Chicken!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for chicken pet!");
								return true;
							}
						break;
						case "pig":
							if ($sender->hasPermission("pets.type.pig")){
								$this->main->changePet($sender, "PigPet");
								$sender->sendMessage("Your pet has changed to Pig!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for pig pet!");
								return true;
							}
						break;
						case "blaze":
							if ($sender->hasPermission("pets.type.blaze")){
								$this->main->changePet($sender, "BlazePet");
								$sender->sendMessage("Your pet has changed to Blaze!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for blaze pet!");
								return true;
							}
						break;
						case "magma":
							if ($sender->hasPermission("pets.type.magma")){
								$this->main->changePet($sender, "MagmaPet");
								$sender->sendMessage("Your pet has changed to Magma!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for blaze pet!");
								return true;
							}
						break;
						case "rabbit":
							if ($sender->hasPermission("pets.type.rabbit")){
								$this->main->changePet($sender, "RabbitPet");
								$sender->sendMessage("Your pet has changed to Rabbit!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for rabbit pet!");
								return true;
							}
						break;
						case "bat":
							if ($sender->hasPermission("pets.type.bat")){
								$this->main->changePet($sender, "BatPet");
								$sender->sendMessage("Your pet has changed to Bat!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for bat pet!");
								return true;
							}
						break;
						case "silverfish":
							if ($sender->hasPermission("pets.type.silverfish")){
								$this->main->changePet($sender, "SilverfishPet");
								$sender->sendMessage("Your pet has changed to SilverFish!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for SilverFish pet!");
								return true;
							}
						break;
						case "ocelot":
						case "cat":
							if ($sender->hasPermission("pets.type.ocelot")){
								$this->main->changePet($sender, "OcelotPet");
								$sender->sendMessage("Your pet has changed to Ocelot!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for ocelot pet!");
								return true;
							}
						break;
					}
				}
					else {
							$sender->sendMessage("/pet type [type]");
							$sender->sendMessage("use /pets list to see available pet types");
						return true;
					}
					//test clear pet
				case "clear":
					$this->main->ClearPet($sender);
					$sender->sendMessage("Clear your pets");
					return true;
				}
		}
}
