<?php
/**
 * Push Notifications plugin for Craft CMS 3.x
 *
 * Web push notifications using firebase for Craft CMS
 *
 * @link      https://www.24hoursmedia.com/en
 * @copyright Copyright (c) 2020 24hoursmedia
 */

namespace twentyfourhoursmedia\pushnotifications\utilities;

use twentyfourhoursmedia\pushnotifications\PushNotifications;
use twentyfourhoursmedia\pushnotifications\assetbundles\pushnotificationsutilityutility\PushNotificationsUtilityUtilityAsset;

use Craft;
use craft\base\Utility;

/**
 * Push Notifications Utility
 *
 * @author    24hoursmedia
 * @package   PushNotifications
 * @since     1.0.0
 */
class PushNotificationsUtility extends Utility
{
    // Static
    // =========================================================================

    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return Craft::t('push-notifications', 'PushNotificationsUtility');
    }

    /**
     * @inheritdoc
     */
    public static function id(): string
    {
        return 'pushnotifications-push-notifications-utility';
    }

    /**
     * @inheritdoc
     */
    public static function iconPath()
    {
        return Craft::getAlias("@twentyfourhoursmedia/pushnotifications/assetbundles/pushnotificationsutilityutility/dist/img/PushNotificationsUtility-icon.svg");
    }

    /**
     * @inheritdoc
     */
    public static function badgeCount(): int
    {
        return 0;
    }

    /**
     * @inheritdoc
     */
    public static function contentHtml(): string
    {
        Craft::$app->getView()->registerAssetBundle(PushNotificationsUtilityUtilityAsset::class);

        $someVar = 'Have a nice day!';
        return Craft::$app->getView()->renderTemplate(
            'push-notifications/_components/utilities/PushNotificationsUtility_content',
            [
                'someVar' => $someVar
            ]
        );
    }
}
