<?php

use App\Application\School\Domain\SchoolName;
use Doctrine\ORM\Mapping\Builder\ClassMetadataBuilder;



$builder = new ClassMetadataBuilder($metadata);
$builder->createField('id', 'uuid')->makePrimaryKey()->generatedValue('none')->build();
$builder->addEmbedded('name', SchoolName::class);
