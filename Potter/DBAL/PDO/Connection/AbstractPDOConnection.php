<?php

namespace Potter\DBAL\PDO\Connection;

use \PDO;

use Potter\DBAL\Server\AbstractDatabaseServer;

abstract class AbstractPDOConnection extends AbstractDatabaseServer implements PDOConnectionInterface
{
    use PDOConnectionTrait;

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
}