<?php

namespace Potter\DBAL\MySQL\Connection;

trait MySQLConnectionTrait
{
    final public function getDatabases(): array
    {
        return $this->showDatabases();
    }

    abstract public function showDatabases(string $like = ''): array;
}