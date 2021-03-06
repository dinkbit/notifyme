<?php

/*
 * This file is part of NotifyMe.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NotifyMeHQ\Adapters\Twilio;

use GuzzleHttp\Client;
use NotifyMeHQ\Contracts\FactoryInterface;
use NotifyMeHQ\Support\Arr;

class TwilioFactory implements FactoryInterface
{
    /**
     * Create a new twilio gateway instance.
     *
     * @param string[] $config
     *
     * @return \NotifyMeHQ\Adapters\Twilio\TwilioGateway
     */
    public function make(array $config)
    {
        Arr::requires($config, ['from', 'client', 'token']);

        $client = new Client();

        return new TwilioGateway($client, $config);
    }
}
