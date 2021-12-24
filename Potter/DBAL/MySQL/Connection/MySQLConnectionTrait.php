<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\Statement\StatementInterface;

trait MySQLConnectionTrait
{
    abstract public function prepare(string $statement): StatementInterface;

    final public function showDatabases(string $like = ''): array
    {
        $query = "SHOW DATABASES";
        if (strlen($like) === 0) {
            $statement = $this->prepare($query);
            $statement->execute();
            return $statement->fetch();
        }
        $query .= " LIKE ?";
        $statement = $this->prepare($query);
        $statement->bindParam(1, StatementInterface::PARAM_STR, $like);
        $statement->execute();
        return $statement->fetch();
    }
}