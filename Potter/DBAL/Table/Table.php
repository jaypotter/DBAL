<?php

namespace Potter\DBAL\Table;

use Potter\DBAL\Database\DatabaseInterface;

final class Table extends AbstractTable
{
    public function __construct(private DatabaseInterface $database, private string $table)
    {

    }

    public function getDatabase(): string
    {
        return $this->database;
    }

    public function getName(): string
    {
        return $this->table;
    }
}