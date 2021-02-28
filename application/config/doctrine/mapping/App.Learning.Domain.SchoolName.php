<?php

use Doctrine\ORM\Mapping\Builder\ClassMetadataBuilder;


/**
 * @var \Doctrine\ORM\Mapping\ClassMetadata $metadata
 */
$metadata;

$builder = new ClassMetadataBuilder($metadata);
$builder->setEmbeddable();
$builder->addField('name', 'string');