<?php

namespace pets\command;

use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pets\main;
use pocketmine\utils\TextFormat as TF;

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
			if($sender->hasPermission('pets.command')){
				$this->main->togglePet($sender);
				return true;
			}
			else{
				$sender->sendMessage(TextFormat::RED."You do not have permission to use this command");
				return true;
			}
		}
		switch (strtolower($args[0])){
			case "name":
				if (isset($args[1])){
					unset($args[0]);
					$name = implode(" ", $args);
					$this->main->getPet($sender->getName())->setNameTag($name);
					$sender->sendMessage("Set Name to ".$name);
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
				$sender->sendMessage("§e§lslime");
				return true;
				}
				else{
				$sender->sendMessage("§4You do not have permission to use this command");
				 }
				return true;
			break;
			
			case "help":
				if($sender->hasPermission('pet.command.help')){
				$sender->sendMessage("§e======PetHelp======");
				$sender->sendMessage("§b/pets to enable or disable your pet");
				$sender->sendMessage("§b/pets type [type] to change your pet");
				$sender->sendMessage("§b/pets name [new name] to change pet's name");
				$sender->sendMessage("§b/pets list : to show list pets");
				return true;
				}else{
					$sender->sendMessage(TextFormat::RED."You do not have permission to use this command");
				}
					return true;
			break;
			
			case "type":
				if (isset($args[1])){
					switch ($args[1]){
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
						
						case "pig":
							if ($sender->hasPermission("pets.type.pig")){
								$this->main->changePet($sender, "PigPet");
								$sender->sendMessage("Your pet has changed to Pig!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for SiverFish pet!");
								return true;
							}
						break;
						
						case "silverfish":
							if ($sender->hasPermission("pets.type.silerfish")){
								$this->main->changePet($sender, "SilverfishPet");
								$sender->sendMessage("Your pet has changed to SiverFish!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for SiverFish pet!");
								return true;
							}
						break;
						
						case "ocelot":
							if ($sender->hasPermission("pets.type.ocelot")){
								$this->main->changePet($sender, "OcelotPet");
								$sender->sendMessage("Your pet has changed to Ocelot!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for Ocelot pet!");
								return true;
							}
						break;
						
						case "Slime":
							if ($sender->hasPermission("pets.type.slime")){
								$this->main->changePet($sender, "SlimePet");
								$sender->sendMessage("Your pet has changed to Slime!");
								return true;
							}else{
								$sender->sendMessage("You do not have permission for Slime pet!");
								return true;
							}
						break;
					}
					
				}
				else{
					$sender->sendMessage("/pet type [type]");
					$sender->sendMessage("Types: ocelot, slime,blaze, pig, chicken, dog, rabbit, magma, bat, silverfish");
					return true;
					}
				return true;
			break;
		}
		
		return true;
	}

}

