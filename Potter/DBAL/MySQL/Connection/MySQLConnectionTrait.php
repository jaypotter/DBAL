<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\Statement\StatementInterface;

trait MySQLConnectionTrait
{
    abstract public function prepare(string $statement): StatementInterface;

    final public function showDatabases(string $like = ''): array
    {
        $statement = $this->prepare("SHOW DATABASES");
        $statement->execute();
        return $statement->fetch();
    }
}