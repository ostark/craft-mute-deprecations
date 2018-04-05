<?php

namespace ostark\MuteDeprecations;

use craft\web\Application as CraftWebApp;
use craft\console\Application as CraftConsoleApp;
use yii\base\BootstrapInterface;

/**
 * Class Bootstrap
 *
 * @author Oliver Stark <os@fortrabbit.com>
 * @since  0.1.0
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {

        if ($app instanceof CraftWebApp || $app instanceof CraftConsoleApp) {

            // Don't mute in devMode
            if ($app->getConfig()->getGeneral()->devMode) {
                return;
            }

            // Don't mute in dev ENV
            if ($app->getConfig()->env === 'dev') {
                return;
            }

            // Mute
            $app->set('deprecator', Deprecator::class);

        }
    }
}
