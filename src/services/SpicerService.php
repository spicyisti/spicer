<?php
/**
 * Spicer plugin for Craft CMS 3.x
 *
 * Boilerplate core plugin
 *
 * @link      https://istiakshams.com
 * @copyright Copyright (c) 2022 Istiak
 */

namespace spicyisti\spicer\services;

use spicyisti\spicer\Spicer;

use Craft;
use craft\base\Component;

/**
 * SpicerService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Istiak
 * @package   Spicer
 * @since     1.0.0
 */
class SpicerService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Spicer::$plugin->spicerService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (Spicer::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
