<?php
/**
 * Push Notifications plugin for Craft CMS 3.x
 *
 * Web push notifications using firebase for Craft CMS
 *
 * @link      https://www.24hoursmedia.com/en
 * @copyright Copyright (c) 2020 24hoursmedia
 */

namespace twentyfourhoursmedia\pushnotifications\services;

use twentyfourhoursmedia\pushnotifications\PushNotifications;

use Craft;
use craft\base\Component;

/**
 * @author    24hoursmedia
 * @package   PushNotifications
 * @since     1.0.0
 */
class PushNotificationsService extends Component
{
    // Public Methods
    // =========================================================================

    /*
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (PushNotifications::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
