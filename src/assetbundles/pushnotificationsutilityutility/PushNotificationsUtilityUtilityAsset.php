<?php
/**
 * Push Notifications plugin for Craft CMS 3.x
 *
 * Web push notifications using firebase for Craft CMS
 *
 * @link      https://www.24hoursmedia.com/en
 * @copyright Copyright (c) 2020 24hoursmedia
 */

namespace twentyfourhoursmedia\pushnotifications\assetbundles\pushnotificationsutilityutility;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    24hoursmedia
 * @package   PushNotifications
 * @since     1.0.0
 */
class PushNotificationsUtilityUtilityAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@twentyfourhoursmedia/pushnotifications/assetbundles/pushnotificationsutilityutility/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/PushNotificationsUtility.js',
        ];

        $this->css = [
            'css/PushNotificationsUtility.css',
        ];

        parent::init();
    }
}
