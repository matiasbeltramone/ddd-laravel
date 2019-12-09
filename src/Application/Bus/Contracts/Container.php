<?php
declare(strict_types=1);

namespace DDD\Application\Bus\Contracts;

interface Container
{
    public function make(string $class);
}
