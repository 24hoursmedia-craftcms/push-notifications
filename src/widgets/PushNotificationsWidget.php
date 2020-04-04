<?php
/**
 * Push Notifications plugin for Craft CMS 3.x
 *
 * Web push notifications using firebase for Craft CMS
 *
 * @link      https://www.24hoursmedia.com/en
 * @copyright Copyright (c) 2020 24hoursmedia
 */

namespace twentyfourhoursmedia\pushnotifications\widgets;

use twentyfourhoursmedia\pushnotifications\PushNotifications;
use twentyfourhoursmedia\pushnotifications\assetbundles\pushnotificationswidgetwidget\PushNotificationsWidgetWidgetAsset;

use Craft;
use craft\base\Widget;

/**
 * Push Notifications Widget
 *
 * @author    24hoursmedia
 * @package   PushNotifications
 * @since     1.0.0
 */
class PushNotificationsWidget extends Widget
{

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $message = 'Hello, world.';

    // Static Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return Craft::t('push-notifications', 'PushNotificationsWidget');
    }

    /**
     * @inheritdoc
     */
    public static function iconPath()
    {
        return Craft::getAlias("@twentyfourhoursmedia/pushnotifications/assetbundles/pushnotificationswidgetwidget/dist/img/PushNotificationsWidget-icon.svg");
    }

    /**
     * @inheritdoc
     */
    public static function maxColspan()
    {
        return null;
    }

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        $rules = parent::rules();
        $rules = array_merge(
            $rules,
            [
                ['message', 'string'],
                ['message', 'default', 'value' => 'Hello, world.'],
            ]
        );
        return $rules;
    }

    /**
     * @inheritdoc
     */
    public function getSettingsHtml()
    {
        return Craft::$app->getView()->renderTemplate(
            'push-notifications/_components/widgets/PushNotificationsWidget_settings',
            [
                'widget' => $this
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function getBodyHtml()
    {
        Craft::$app->getView()->registerAssetBundle(PushNotificationsWidgetWidgetAsset::class);

        return Craft::$app->getView()->renderTemplate(
            'push-notifications/_components/widgets/PushNotificationsWidget_body',
            [
                'message' => $this->message
            ]
        );
    }
}
