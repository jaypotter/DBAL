<?php

namespace Potter\DBAL\MySQLi\Connection;

use \MySQLi;
use Potter\DBAL\MySQL\Connection\{
    MySQLConnectionInterface,
    MySQLConnectionTrait
};
use Potter\DBAL\{
    MySQLi\MySQLiStatement,
    Server\Remote\AbstractRemoteDatabaseServer,
    Statement\StatementInterface
};

final class MySQLiConnection extends AbstractRemoteDatabaseServer implements MySQLiConnectionInterface
{
    use MySQLiHandleTrait, MySQLiShowTrait;

    private const PREFIX = 'mysqli';

    public function __construct(string $user, string $password, string $server = 'localhost', int $port = MySQLConnectionInterface::DEFAULT_PORT)
    {
        $this->setUser($user);
        $this->setPass($password);
        $this->setHost($server);
        $this->setPort($port);
        $this->connect();   
    }

    public function connect(): void
    {
        $this->setHandle(
            new MySQLi(
                hostname: $this->getHost(),
                username: $this->getUser(),
                password: $this->getPass(),
                port: $this->getPort()
            )
        );
    }

    public function getPrefix(): string
    {
        return self::PREFIX;
    }

    public function prepare(string $statement): StatementInterface
    {
        return new MySQLiStatement($this, $statement);
    }
}