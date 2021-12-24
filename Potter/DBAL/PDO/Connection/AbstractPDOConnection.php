<?php

namespace Potter\DBAL\PDO\Connection;

use \PDO;

use Potter\DBAL\Server\AbstractDatabaseServer;

abstract class AbstractPDOConnection extends AbstractDatabaseServer implements PDOConnectionInterface
{
    use PDOConnectionTrait;
}