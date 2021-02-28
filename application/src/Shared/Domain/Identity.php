<?php

declare(strict_types=1);

namespace App\Shared\Domain;

use Ramsey\Uuid\UuidInterface;

class Identity
{
    private UuidInterface $id;

    public function __construct(UuidInterface $id)
    {
        $this->id = $id;
    }
}