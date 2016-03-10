<?php

namespace XtraCreative;

use BukkitPE\plugin\PluginBase;
use BukkitPE\item\Item;
use BukkitPE\event\Listener;
use BukkitPE\Player;

class XtraCreative extends PluginBase implements Listener {
  
  public function onLoad() {
    $this->getLogger()->info("Loading ...");
  }
  public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
    item::removeCreativeItem(Item::get(Item::IRON_HOE, 0));
    item::removeCreativeItem(Item::get(Item::IRON_SWORD, 0));
    item::removeCreativeItem(Item::get(Item::IRON_SHOVEL, 0));
    item::addCreativeItem(Item::get(Item::DIAMOND_SWORD, 0));
    item::addCreativeItem(Item::get(Item::DIAMOND_HOE, 0));
    item::addCreativeItem(Item::get(Item::DIAMOND_AXE, 0));
    item::addCreativeItem(Item::get(Item::DIAMOND_PICKAXE, 0));
    item::addCreativeItem(Item::get(Item::DIAMOND_SHOVEL, 0));
    item::addCreativeItem(Item::get(62, 0));
    item::addCreativeItem(Item::get(63, 0));
    item::addCreativeItem(Item::get(116, 0));
    item::addCreativeItem(Item::get(88, 0));
    item::addCreativeItem(Item::get(31, 0));
    item::addCreativeItem(Item::get(198, 0));
    item::addCreativeItem(Item::get(246, 0));
    item::addCreativeItem(Item::get(330, 0));
    item::addCreativeItem(Item::get(92, 92));
    item::addCreativeItem(Item::get(75, 0));
    item::addCreativeItem(Item::get(90, 0));
    item::addCreativeItem(Item::get(60, 0));
    item::addCreativeItem(Item::get(74, 0));
    item::addCreativeItem(Item::get(33, 0));
    item::addCreativeItem(Item::get(245, 0));
    item::addCreativeItem(Item::get(247, 0));
    item::addCreativeItem(Item::get(247, 1));
    item::addCreativeItem(Item::get(162, 2));
    item::addCreativeItem(Item::get(153, 0));
    item::addCreativeItem(Item::get(439, 0));
    item::addCreativeItem(Item::get(165, 0));
    item::addCreativeItem(Item::get(93, 0));
    item::addCreativeItem(Item::get(149, 0));
    item::addCreativeItem(Item::get(150, 0));
  }
  public function onDisable() {
    $this->getLogger()->info("Disabled");
  }
}


?>
