<?php


namespace App\Application\Shared;


interface CommandBus
{
    public function dispatch($command);
}