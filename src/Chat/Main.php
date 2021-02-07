<?php

namespace Chat;

//Mxra/FurkanPM
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\Listener;
use pocketmine\event\Event;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getLogger()->info("Eklenti Aktif FurkanPM / Mxra"); 
 $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function fullChat(PlayerChatEvent $event){
		$p = $event->getPlayer();
		//ayarlamalar
		if($event->getMessage() == "sa"){
			$event->setMessage("Selamün Aleyküm");
		}
		if($event->getMessage() == "!sa"){
			$event->setMessage("!Selamün Aleyküm");
		}
		if($event->getMessage() == "!Sa"){
			$event->setMessage("!Selamün Aleyküm");
		}
				if($event->getMessage() == "Sa"){
			$event->setMessage("Selamün Aleyküm");
		}
		if($event->getMessage() == "as"){
		    $event->setMessage("Aleyküm Selam");
		}
		if($event->getMessage() == "hg"){
		    $event->setMessage("Hoşgeldin");
		}
		if($event->getMessage() == "hb"){
		    $event->setMessage("Hoşbuldum");
		}
		if($event->getMessage() == "kg"){
		    $event->setMessage("Kolay gelsin");
		}
    }
}
