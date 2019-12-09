<?php
declare(strict_types=1);

namespace DDD\Infrastructure\Bus\Contracts;

use DDD\Application\Contracts\Command;

interface CommandBus
{
    public function handle(Command $command);
}
