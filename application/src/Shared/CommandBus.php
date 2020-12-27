<?php


namespace App\Shared;


interface CommandBus
{
    public function dispatch($command);
}