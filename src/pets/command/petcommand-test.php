//comming soon and add command will work hard
<?php
namespace pets\command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pets\main;
use pocketmine\utils\TextFormat as TF;
class PetCommand extends PluginCommand {


	public function __construct(main $main, $name){
	  $this->main = $main;
	}
	
	 public function onCommand(CommandSender $sender, Command $command, $label, array $args){
      if (!($sender instanceof Player) || !$sender->isOp()) {
            switch (strtolower(array_shift($args))):
              
        
                case 'name':
                    if (!(count($args) > 0 && count($args) < 0b11)) {
                        $sender->sendMessage(TextFormat::AQUA . '→/pet name (name)'');
                        break;
                    }
