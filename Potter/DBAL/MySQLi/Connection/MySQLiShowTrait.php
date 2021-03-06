<?php

namespace Potter\DBAL\MySQLi\Connection;

use Potter\DBAL\{
    MySQLi\MySQLiInjectionFlag,
    Statement\StatementInterface
};

trait MySQLiShowTrait
{
    abstract public function prepare(string $statement, bool $immediate = false): StatementInterface;

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
        foreach ([' ', '"', "'", ";"] as $char) {
            if (strpos($like, $char) !== false) {
                throw new MySQLiInjectionFlag;
            }
        }
    }
}