<?php


namespace App\Application\School\Command;


class CreateSchoolHandler
{

    public function handle(CreateSchool $command)
    {
        return [1,2,3];
    }

    public function __invoke(CreateSchool  $command) {
        return $this->handle($command);
    }
}