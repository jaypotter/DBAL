<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\{
    PDO\Connection\Remote\AbstractRemotePDOConnection,
    Statement\StatementInterface
};

final class MySQLConnection extends AbstractRemotePDOConnection implements MySQLConnectionInterface
{
    private const PREFIX = 'mysqli';

    public function __construct(string $user, string $password, string $server = 'localhost', int $port = MySQLConnectionInterface::DEFAULT_PORT)
    {
        $this->setUser($user);
        $this->setPass($password);
        $this->setHost($server);
        $this->setPort($port);
        $this->setDsn("mysql:host=$server;port=$port");
        $this->connect();   
    }

    public function getPrefix(): string
    {
        return self::PREFIX;
    }

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