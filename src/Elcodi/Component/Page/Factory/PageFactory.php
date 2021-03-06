<?php

/*
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

namespace Elcodi\Component\Page\Factory;

use Elcodi\Component\Core\Factory\Abstracts\AbstractFactory;
use Elcodi\Component\Page\Entity\Page;

/**
 * Class PageFactory
 *
 * @author Cayetano Soriano <neoshadybeat@gmail.com>
 * @author Jordi Grados <planetzombies@gmail.com>
 * @author Damien Gavard <damien.gavard@gmail.com>
 * @author Berny Cantos <be@rny.cc>
 */
class PageFactory extends AbstractFactory
{
    /**
     * Creates an instance of an entity.
     *
     * Queries should be implemented in a repository class
     *
     * @return Page entity
     */
    public function create()
    {
        $now = new \DateTime();

        /**
         * @var Page $page
         */
        $classNamespace = $this->getEntityNamespace();
        $page = new $classNamespace();
        $page
            ->setEnabled(true)
            ->setCreatedAt($now)
            ->setUpdatedAt($now);

        return $page;
    }
}
