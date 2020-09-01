<?php

namespace Dohnall\Nais;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class CopyFiles
{
    public static function postPackageInstall(PackageEvent $event)
    {
        $installedPackage = $event->getOperation()->getPackage();
        echo $installedPackage;
    }
}
