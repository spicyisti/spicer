<?php
/**
 * Spicer plugin for Craft CMS 3.x
 *
 * Boilerplate core plugin
 *
 * @link      https://istiakshams.com
 * @copyright Copyright (c) 2022 Istiak
 */

namespace spicyisti\spicertests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use spicyisti\spicer\Spicer;

/**
 * ExampleUnitTest
 *
 *
 * @author    Istiak
 * @package   Spicer
 * @since     1.0.0
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            Spicer::class,
            Spicer::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
