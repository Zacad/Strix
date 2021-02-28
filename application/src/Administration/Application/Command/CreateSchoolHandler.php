<?php


namespace App\Administration\Application\Command;


class CreateSchoolHandler
{

    public function handle(CreateSchool $command)
    {
        $schoolName = new SchoolName($command->getName());
    }

    public function __invoke(CreateSchool  $command) {
        return $this->handle($command);
    }
}