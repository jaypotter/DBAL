<?php

namespace Potter\DBAL\PDO\Connection;

use \PDO;

trait PDOConnectionTrait
{
    public string $dsn;

    public PDO $handle;

    public string $user;
    
    public string $pass;    

    final public function getDsn(): string
    {
        return $this->dsn;
    }

    final public function getHandle(): PDO
    {
        return $this->pdo;
    }

    final public function getPass(): string
    {
        return $this->pass;
    }

    final public function getUser(): string
    {
        return $this->user;
    }

    final public function setDsn(string $dsn): void
    {
        $this->dsn = $dsn;
    }

    final public function setHandle(PDO $pdo): void
    {
        $this->handle = $pdo;
    }

    final public function setPass(string $pass): void
    {
        $this->pass = $pass;
    }

    final public function setUser(string $user): void
    {
        $this->user = $user;
    }
}