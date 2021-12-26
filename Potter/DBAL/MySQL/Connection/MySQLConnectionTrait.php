<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\Statement\StatementInterface;

trait MySQLConnectionTrait
{
    final public function getDatabases(): array
    {
        return $this->showDatabases();
    }

    abstract public function showDatabases(string $like = ''): array;

    final public function use(string $database): void
    {
        $statement = $this->prepare("USE ?");
        $statement->bindParam(1, StatementInterface::PARAM_STR, $database);
        $statement->execute();
    }
}