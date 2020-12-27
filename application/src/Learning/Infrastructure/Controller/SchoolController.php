<?php

namespace App\Learning\Infrastructure\Controller;

use App\Learning\Application\Command\CreateSchool;
use App\Shared\CommandBus;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\Exception\HandlerFailedException;

class SchoolController extends AbstractController
{
    public function index(CommandBus $commandBus): Response
    {
        $message = new CreateSchool('szkoła');
        try {
            $commandBus->dispatch($message);
        }
        catch (HandlerFailedException $exception) {
            return $this->json($exception->getMessage());
        }
        return $this->json('School created', 201);
    }
}
