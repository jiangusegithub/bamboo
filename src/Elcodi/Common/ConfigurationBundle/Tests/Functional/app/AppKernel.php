<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014-2015 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Elcodi\Common\ConfigurationBundle\Tests\Functional\app;

use Elcodi\Bundle\CoreBundle\Traits\BundleDependenciesResolver;
use Elcodi\Bundle\TestCommonBundle\Functional\Abstracts\AbstractElcodiKernel;

/**
 * Class AppKernel
 */
class AppKernel extends AbstractElcodiKernel
{
    use BundleDependenciesResolver;

    /**
     * Register application bundles
     *
     * @return array Array of bundles instances
     */
    public function registerBundles()
    {
        return $this->getBundleInstances([
            '\Symfony\Bundle\FrameworkBundle\FrameworkBundle',
            '\Symfony\Bundle\MonologBundle\MonologBundle',
            '\Doctrine\Bundle\DoctrineBundle\DoctrineBundle',
            '\Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle',
            '\Elcodi\Bundle\FixturesBoosterBundle\ElcodiFixturesBoosterBundle',
            '\Elcodi\Bundle\ConfigurationBundle\ElcodiConfigurationBundle',
            '\Mmoreram\ControllerExtraBundle\ControllerExtraBundle',
            '\Elcodi\Common\ConfigurationBundle\ConfigurationAnnotationBundle',
            '\Elcodi\Common\ConfigurationBundle\Tests\FakeBundle\FakeBundle',
        ]);
    }

    /**
     * Gets the container class.
     *
     * @return string The container class
     */
    protected function getContainerClass()
    {
        return  $this->name .
                ucfirst($this->environment) .
                'DebugProjectContainerConfiguration';
    }
}