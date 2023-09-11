<?php

namespace skyss0fly\ShitBlock;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\world\Position;
use pocketmine\world\World;
use pocketmine\block\VanillaBlocks;

class Shit extends PluginBase {

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if (!$sender instanceof Player) {
            $sender->sendMessage(TextFormat::RED . "Please use this command in-game");
            return false;
        }

        if ($command->getName() === "shit") {
            if (!$sender->hasPermission("ShitBlock.TakeAFatShit")) {
                $sender->sendMessage(TextFormat::RED . "Bruh no perms");
                return false; 

} else {
                $x = $sender->getPosition()->getX();
                $y = $sender->getPosition()->getY();
                $z = $sender->getPosition()->getZ();
$player = $sender->getPlayer()
                $world = $player->getWorld();
                $block = $world->getBlockAt($x, $y - 1, $z);
                $world->setBlock(VanillaBLOCKS::MUD(), $block);

                $this->getServer()->broadcastMessage(TextFormat::BOLD . TextFormat::YELLOW . $sender->getName() . " Took a Fat sh1t at " . $x . " " . $y . " " . $z . " !");
                return true;
            }
        }
        return false;
    }
}
