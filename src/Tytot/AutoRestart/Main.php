<?php

namespace Tytot\AutoRestart;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
	public $sec = 10;
	public function onEnable(){
    		$this->getServer()->getScheduler()->scheduleRepeatingTask(new Timer($this), 20); //every second
  	}
}
