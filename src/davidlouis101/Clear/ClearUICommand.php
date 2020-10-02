<?php

namespace davidlouis101\Clear;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TF;

class ClearUICommand PluginBase implements Listener {

 public function onEnable(){
 $this->getLogger()->info(TF::GREEN . "Plugin Startet");
 }
 
 
}
