<?php

use App\Administration\Domain\SchoolName;
use Doctrine\ORM\Mapping\Builder\ClassMetadataBuilder;

$builder = new ClassMetadataBuilder($metadata);
$builder->createField('id', 'uuid')->makePrimaryKey()->generatedValue('NONE')->build();
$builder->addEmbedded('name', SchoolName::class);
