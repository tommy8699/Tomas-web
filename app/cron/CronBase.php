<?php

namespace App\Cron;

use App;
use Nette;

# Autoloading tříd přes Composer - tedy i naší Bootstrap třídy
require __DIR__ . '/../../vendor/autoload.php';


class CronBase
{

    public function __construct()
    {
        # Necháme konfigurátor, aby nám sestavil DI kontejner
        $configurator = App\Bootstrap::bootForCron();

        // musim nastavit debug mode jinak se me to nechce pripojit k DB, ale nevim proc
        $configurator->setDebugMode(TRUE);

        $this->container = $configurator->createContainer();
        $this->dbcontext = $this->container->getByType(Nette\Database\Context::class);

    }
}