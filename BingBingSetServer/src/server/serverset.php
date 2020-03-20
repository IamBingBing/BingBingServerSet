<?php
namespace server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;

class serverset extends PluginBase implements Listener{
    public function onEnable(){
        $this->set = new Config($this->getDataFolder()."setting.yml" , Config::YAML , ["maxplayer" => 2020 , "servernameinfo" => "Hash 서버 :: 제국의 시작"]);
        $this->s = $this->set->getAll();
        $this->getServer()->getQueryInformation()->setMaxPlayerCount($this->s["maxplayer"]);
        $this->getServer()->getQueryInformation()->setServerName($this->s["servernameinfo"]);
    }
}
