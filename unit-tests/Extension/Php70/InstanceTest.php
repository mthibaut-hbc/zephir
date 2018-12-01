<?php

/*
 * This file is part of the Zephir.
 *
 * (c) Zephir Team <team@zephir-lang.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Extension\Php70;

use PHPUnit\Framework\TestCase;
use Test\Instance;

class InstanceTest extends TestCase
{
    /**
     * @test
     * @expectedException \Error
     * @expectedExceptionMessage Cannot instantiate abstract class TestAbstractClass
     */
    public function shouldThrowErrorOnInstantiateAbstractClass()
    {
        Instance::testInstanceCreate(\TestAbstractClass::class);
    }
}