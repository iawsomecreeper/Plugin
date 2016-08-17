<?php

namespace ExtraCommands;

use pocketmine\plugin\PluginBase; #Required
use pocketmine\command\CommandSender; #To know the command sender
use pocketmine\command\Command; #To be able to add commands
use pocketmine\utils\Config; #For Config
use pocketmine\utils\TextFormat as C; #For Colors with the "C" format instead of "TextFormat"
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getLogger()->info("Plugin enabled!");
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->saveResource("config.yml");
    }
    public function onDisable(){
        $this->getLogger()->info("Plugin disabled!");
    }
    public function onLoad(){
        $this->getLogger()->info("Loading Plugin!");
    }
}
