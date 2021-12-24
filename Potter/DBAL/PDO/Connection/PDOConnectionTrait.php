<?php

namespace Potter\DBAL\PDO\Connection;

use \PDO;
use Potter\DBAL\{
    PDO\PDOStatement,
    Statement\StatementInterface
};

trait PDOConnectionTrait
{
    public string $dsn;

    public PDO $handle;

    final public function connect(): void
    {
        $this->setHandle(
            new PDO(
                dsn: $this->getDsn(),
                username: $this->getUser(),
                password: $this->getPass()
            )
        );
    }

    final public function getDsn(): string
    {
        return $this->dsn;
    }

    final public function getHandle(): PDO
    {
        return $this->handle;
    }

    abstract public function getPass(): string;

    public function getPrefix(): string
    {
        return 'pdo';
    }

    abstract public function getUser(): string;

    final public function prepare(string $statement): StatementInterface
    {
        return new PDOStatement($this, $statement);
    }

    final public function send(string $bytes): mixed
    {
        return $this->handle->query($bytes);
    }

    final public function setDsn(string $dsn): void
    {
        $this->dsn = $dsn;
    }

    final public function setHandle(PDO $pdo): void
    {
        $this->handle = $pdo;
    }
}