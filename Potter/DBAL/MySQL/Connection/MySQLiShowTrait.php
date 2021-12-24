<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\Statement\StatementInterface;

trait MySQLiShowTrait
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
        $this->validateShowDatabasesLike($like);
        $query .= " LIKE '$like'";
        $statement = $this->prepare($query);
        $statement->execute();
        return $statement->fetch();
    }

    private function validateShowDatabasesLike(string $like): void
    {
        foreach([' ', '"', "'", ";"] as $char) {
            if (strpos($like, $char) !== false) {
                throw new \Exception;
            }
        }
    }
}