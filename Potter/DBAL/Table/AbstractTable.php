<?php

namespace Potter\DBAL\Table;

abstract class AbstractTable implements TableInterface
{
    abstract public function getDatabase(): DatabaseInterface;
    
    abstract public function getName(): string;
}