<?php

namespace Potter\DBAL\PDO\Connection;

use \PDO;

use Potter\DBAL\Server\DatabaseServerInterface;

interface PDOConnectionInterface extends DatabaseServerInterface
{
    public function getDSN(): string;

    public function getHandle(): PDO;

    public function getPass(): string;

    public function getUser(): string;

    public function setDSN(string $dsn): void;

    public function setHandle(PDO $pdo): void;

    public function setPass(string $pass): void;

    public function setUser(string $user): void;
}