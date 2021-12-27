<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\{
    Database\DatabaseInterface,
    MySQL\Database\MySQLDatabase,
    Statement\StatementInterface
};

trait MySQLConnectionTrait
{
    private array $databases;

    final public function databaseExists(string $database): bool
    {
        return in_array($database, $this->getDatabases());
    }

    final public function getDatabases(bool $refresh = false): array
    {
        $refresh = $refresh || !isset($this->databases);
        return $refresh ? $this->refreshDatabases() : $this->databases;
    }

    abstract public function prepare(string $statement, bool $immediate = false): StatementInterface;

    private function refreshDatabases(): array
    {
        $databases = [];
        foreach($this->showDatabases() as $database) {
            array_push($databases, array_values($database)[0]);
        }
        return $this->databases =  $databases;
    }

    abstract public function showDatabases(string $like = ''): array;

    final public function showGrantsForCurrentUser(): array
    {
        $statement = $this->prepare('SHOW GRANTS FOR CURRENT_USER();', true);
        return $statement->fetch();
    }
}