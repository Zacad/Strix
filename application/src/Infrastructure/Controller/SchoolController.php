<?php

namespace App\Infrastructure\Controller;

use App\Application\School\Command\CreateSchool;
use App\Application\Shared\CommandBus;
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
