<?php

namespace AkmalFairuz\MultiVersion;

use pocketmine\plugin\PluginBase;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\Server;

class Main extends PluginBase {

    public function onEnable(): void {
        $this->getLogger()->info("MultiVersion enabled!");

        // پشتیبانی از نسخه‌های 1.20.0 تا 1.21.70
        ProtocolInfo::ACCEPTED_PROTOCOLS = [
            560, // نسخه 1.20.0
            561, // نسخه‌های بعدی 1.20
            567, // نسخه 1.20.30
            568, // نسخه 1.20.40
            575, // نسخه 1.20.50
            578, // نسخه 1.20.60
            580, // نسخه 1.20.70
            582, // نسخه 1.20.80
            589, // نسخه 1.20.81
            594, // نسخه 1.21.0
            595, // نسخه 1.21.1
            596, // نسخه 1.21.2
            597, // نسخه 1.21.10
            598, // نسخه 1.21.20
            599, // نسخه 1.21.30
            600, // نسخه 1.21.40
            601, // نسخه 1.21.50
            602, // نسخه 1.21.60
            603  // نسخه 1.21.70
        ];
    }
}
