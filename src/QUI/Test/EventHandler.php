<?php

/**
 * This file contains QUI\Test\EventHandler
 */

namespace QUI\Test;

use QUI\Package\Package;
use QUI\Projects\Media\ExternalImage;
use QUI\Interfaces\Users\User as UserInterfaces;
use QUI\System\Log;

/**
 * Class EventHandler
 *
 * @package QUI\Test
 */
class EventHandler
{
    /**
     * @return ExternalImage
     */
    public static function onUserGetAvatar(UserInterfaces $User)
    {
        return false;

        return new ExternalImage(
            'https://api.adorable.io/avatars/200/abott@adorable.png'
        );
    }

    /**
     * @param Package $Package
     */
    public static function onInstall(Package $Package)
    {
        if ($Package->getName() === 'quiqqer/test') {
            Log::writeRecursive('QUIQQER TEST INSTALL');
        }
    }
}
