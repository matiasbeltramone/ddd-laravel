<?php
declare(strict_types=1);

namespace DDD\Infrastructure\Bus;

use DDD\Application\Contracts\Command;
use DDD\Infrastructure\Bus\Contracts\CommandBus;

final class SimpleCommandBus implements CommandBus
{
    private const COMMAND_PREFIX = 'Command';
    private const HANDLER_PREFIX = 'Handler';

    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function handle(Command $command)
    {
        return $this->resolveHandler($command)->__invoke($command);
    }

    private function resolveHandler(Command $command)
    {
        return $this->container->make($this->getHandlerClass($command));
    }

    private function getHandlerClass(Command $command): string
    {
        return str_replace(
            self::COMMAND_PREFIX,
            self::HANDLER_PREFIX,
            get_class($command)
        );
    }
}
