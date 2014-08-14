<?php

/**
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\MediaBundle\Tests\Functional\Repository;

use Elcodi\TestCommonBundle\Functional\WebTestCase;

/**
 * Class ImageRepositoryTest
 */
class ImageRepositoryTest extends WebTestCase
{
    /**
     * Returns the callable name of the service
     *
     * @return string service name
     */
    public function getServiceCallableName()
    {
        return [
            'elcodi.core.media.repository.image',
            'elcodi.repository.image',
        ];
    }

    /**
     * Test image repository provider
     */
    public function testFactoryProvider()
    {
        $this->assertInstanceOf(
            $this->getParameter('elcodi.core.media.repository.image.class'),
            $this->get('elcodi.core.media.repository.image')
        );
    }

    /**
     * Test image repository provider alias
     */
    public function testFactoryProviderAlias()
    {
        $this->assertInstanceOf(
            $this->getParameter('elcodi.core.media.repository.image.class'),
            $this->get('elcodi.repository.image')
        );
    }
}
