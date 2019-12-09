<?php
declare(strict_types=1);

namespace DDD\Infrastructure\Bus;

use DDD\Application\Bus\Contracts\Container;
use Illuminate\Container\Container as IoC;

final class LaravelContainer implements Container
{
    private $container;

    public function __construct(IoC $container)
    {
        $this->container = $container;
    }

    public function make(string $class)
    {
        return $this->container->make($class);
    }
}
