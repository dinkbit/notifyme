<?php

/*
 * This file is part of NotifyMe.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NotifyMeHQ\Tests\Support;

use NotifyMeHQ\Support\Arr;
use PHPUnit_Framework_TestCase;

class ArrTest extends PHPUnit_Framework_TestCase
{
    public function testArrGet()
    {
        $array = [
            'foo' => 'bar',
        ];

        $a1 = Arr::get($array, 'foo');
        $a2 = Arr::get($array, 'baz', 'default');

        $this->assertEquals('bar', $a1);
        $this->assertEquals('default', $a2);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testArrRequires()
    {
        $array = [
            'foo' => 'bar',
        ];

        Arr::requires($array, ['baz']);
    }
}
