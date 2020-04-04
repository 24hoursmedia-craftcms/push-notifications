<?php
/**
 * Push Notifications plugin for Craft CMS 3.x
 *
 * Web push notifications using firebase for Craft CMS
 *
 * @link      https://www.24hoursmedia.com/en
 * @copyright Copyright (c) 2020 24hoursmedia
 */

namespace twentyfourhoursmedia\pushnotifications\jobs;

use twentyfourhoursmedia\pushnotifications\PushNotifications;

use Craft;
use craft\queue\BaseJob;

/**
 * @author    24hoursmedia
 * @package   PushNotifications
 * @since     1.0.0
 */
class PushNotificationsTask extends BaseJob
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $someAttribute = 'Some Default';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function execute($queue)
    {
        // Do work here
    }

    // Protected Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    protected function defaultDescription(): string
    {
        return Craft::t('push-notifications', 'PushNotificationsTask');
    }
}
