<?php

declare(strict_types=1);

namespace Creations\SimpleFactory\Tests;

use Creations\SimpleFactory\Bicycle;
use Creations\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}
