<?php
namespace skyss0fly\ShitBlock;


use pocketmine\plugin\PluginBase;
use pocketmine\{command\Command ,utils\TextFormat, block\VanillaBlocks, command\CommandSender , player\Player};

class main extends PluginBase {
 
public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
  switch ($command->getName()) {
            case "shit":
   if ($sender->hasPermission("ShitBlock.TakaAFatShit")){
$x = $sender->getPosition()->getX();
$y = $sender->getPosition()->getY();
$z = $sender->getPosition()->getZ();
 $block = $world->getBlockAt($sender->getPosition()->getFloorX(),$sender->getPosition()->getFloorY() - 1, $sender->getPosition()->getFloorZ());
    $world->setBlock($block, VanillaBlocks::MUD_BLOCK());
    $this->getServer()->broadcastMessage(TEXTFORMAT::BOLD . TEXTFORMAT:YELLOW . $sender->getName() . " Took a Fat Shit at " . $x . " " . $y . " " . $z . " !");
}
   else {
$sender->sendMessage(TEXTFORMAT::RED . "Bruh no perms");
   }
}
}
}