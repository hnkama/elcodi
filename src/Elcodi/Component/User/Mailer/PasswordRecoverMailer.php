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

namespace Elcodi\Component\User\Mailer;

use Elcodi\Component\Core\Mailer\Abstracts\AbstractMailer;
use Elcodi\Component\User\Event\PasswordRecoverEvent;

/**
 * Class PasswordRecoverMailer
 */
class PasswordRecoverMailer extends AbstractMailer
{
    /**
     * Send email
     *
     * @param PasswordRecoverEvent $event Event
     */
    public function sendEmail(PasswordRecoverEvent $event)
    {
        $this->renderEmail(
            'Password recover email',
            $event->getUser()->getEmail(),
            [
                'user' => $event->getUser()
            ]
        );
    }
}
