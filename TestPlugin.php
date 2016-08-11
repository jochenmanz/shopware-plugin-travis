<?php

namespace PlentyConnector;

use Doctrine\ORM\EntityManagerInterface;
use PlentyConnector\Adapter\Plentymarkets\Plentymarkets;
use PlentyConnector\Adapter\Shopware\Shopware;
use PlentyConnector\Bundle\ShopwareAdapter\ShopwareAdapter;
use PlentyConnectorBundle\PlentyConnectorBundle;
use Shopware\Components\Console\Application;
use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;
use ShopwareConnectorBundle\ShopwareConnectorBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class TestPlugin extends Plugin
{

}
