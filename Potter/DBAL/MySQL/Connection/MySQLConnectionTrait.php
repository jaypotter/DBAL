<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\Statement\StatementInterface;

trait MySQLConnectionTrait
{
    final public function getDatabases(): array
    {
        return $this->showDatabases();
    }

    abstract public function prepare(string $statement, bool $immediate = false): StatementInterface;

    abstract public function showDatabases(string $like = ''): array;

    final public function showGrantsForCurrentUser(): array
    {
        $statement = $this->prepare('SHOW GRANTS FOR CURRENT_USER();', true);
        return $statement->fetch();
    }
}