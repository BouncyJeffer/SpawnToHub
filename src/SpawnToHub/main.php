<php

namespace SpawnToHub;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\level\Level;
use pocketmine\entity\Entity;
use pocketmine\Player;

class Main extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->log("SpawnToHub Enabled!");
    }
    public function onJoin(PlayerJoinEvent $event){
$event->getPlayer->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
}
    //add the stuff into the to-do issue
