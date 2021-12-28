<?php

namespace Potter\DBAL\Table;

use Potter\DBAL\Database\DatabaseInterface;

interface TableInterface
{
    public function getDatabase(): DatabaseInterface;
    
    public function getName(): string;
}