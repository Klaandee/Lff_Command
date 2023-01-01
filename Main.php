<?php

namespace Klande\Lff;

use pocketmine\Serverd;
use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TE;

class Main extends PluginBase {
    
    protected static $instance;
    
    public function onLoad() : void {
        self::$instance = $this;
    }
    
    public static function getMain() : Main {
        return self::$instance;
    }

    public function onEnable(): void {
        $this->getLogger()->info("______________");
        $this->getLogger()->info("");
        $this->getLogger()->info("¡LFF Prendido!"); #alerta que el plugin envia cuando el servidor esta prendido.
        $this->getLogger()->info("_____________");
    }

    public function onDisable(): void {
          $this->getLogger()->info("______________");
          $this->getLogger()->info("");
          $this->getLogger()->info("¡LFF Apagado!"); #alerta que el plugin envia cuando el servidor esta apagado.
          $this->getLogger()->info("______________");
    }
     
    public function onCommand(CommandSender $sender, Command $Command, string $label, array $args): bool{
        $msg = implode(" ", $args);
        if(!$sender->hasPermission("Lff.cmd")){
            $sender->sendMessage(TE::RED."You have not permissions to use this command");
            
        }
       switch($Command->getName()){
            case "lff":
                    Main::getMain()->getServer()->broadcastMessage("§6§lPaNicQ §fLFF §r§7»"); #aquí editas y pones el nombre de tu servidor o el que quieras.
                    Main::getMain()->getServer()->broadcastMessage("");
               #no editar estos, son las lineas del comando.
                    Main::getMain()->getServer()->broadcastMessage("§f§l ".$sender->getName(). " §1§lEsta buscando una Faction!");
                    Main::getMain()->getServer()->broadcastMessage("");
       }
        return true;
      }
}
#Plugin By: Klande

#Puede ser muy simple pero me costo XD espero lo usen chavales se agradece, si lo apoyan lo mejorare mucho mas! 

#Plugin Ver: 1.0