<?php


namespace App\Infrastructure;


use App\Application\Shared\CommandBus;
use Symfony\Component\Messenger\MessageBusInterface;

class CommandBusAdapter implements CommandBus
{
    /**
     * @var MessageBusInterface
     */
    private MessageBusInterface $messageBus;

    public function __construct(MessageBusInterface $messageBus) {
        $this->messageBus = $messageBus;
    }
    public function dispatch($command)
    {
        // TODO: Implement dispatch() method.
        $this->messageBus->dispatch($command);
    }
}