<?php

use Shopware\Components\DependencyInjection\Container;

/**
 * Class PluginTest
 */
class PluginTest extends Enlight_Components_Test_TestCase
{
    /**
     * Test case
     */
    public function testShopwareIntegration()
    {
        $container = Shopware()->Container();

        $this->assertInstanceOf(Container::class, $container);
    }
}
