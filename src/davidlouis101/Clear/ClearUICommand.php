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
 $this->getLogger()->info(TF::GREEN . "Plugin Start");
 }

 public function onCommand(CommandSender $s, Command $c, string $label, array $args): bool
  {
   
    switch($c->getName()){
      if($s instanceof Player){
       $this->Clear($s);
     } else {
       $s->sendMessage(TextFormat::DADK_RED . "Bitte Benutze denn Command In-Game!");
     }
    }
  break;
   }
   return true;
}

 public Clear($player){

 }
}
