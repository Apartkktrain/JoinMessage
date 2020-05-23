<?php

namespace apartkktrain\tokyo;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Server;
use pocketmine\block\Block;
use pocketmine\utils\Config;
use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\math\Vector3;



class Main extends pluginBase implements Listener
{
    public function onEnable()
    {
        $this->getLogger()->notice("tokyover.0.0.1の読み込み成功");
        $this->getLogger()->notice("システム構築に成功。二次配布は禁止です。cratedbyApartkktrain");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }



public function onJoin(PlayerJoinEvent $event)
{
    $name = $event->getPlayer()->getName();
    $event->setJoinMessage("§a{$name}が参加しました。鯖生活を楽しんでいってね!");
 }
}




