<?php

namespace xenialdan\BossBarAPI;

use pocketmine\scheduler\PluginTask;
use pocketmine\plugin\Plugin;

class SendTask extends PluginTask{

	public function __construct(Plugin $owner){
		parent::__construct($owner);
	}

	public function onRun($currentTick){
		$this->getOwner()->sendBossBar();
	}

	public function cancel(){
		$this->getHandler()->cancel();
	}
}