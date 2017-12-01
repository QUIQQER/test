<?php

/**
 * This file contains QUI\Test\EventHandler
 */

namespace QUI\Test;

use QUI\Projects\Media\ExternalImage;
use QUI\Interfaces\Users\User as UserInterfaces;

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
    public static function onUserChangePassword(UserInterfaces $User)
    {
        return new ExternalImage(
            'https://api.adorable.io/avatars/200/abott@adorable.png'
        );
    }
}
