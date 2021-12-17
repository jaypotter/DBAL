<?php

namespace Potter\DBAL\PDO\Connection;

require_once __DIR__ . '/PDOConnectionInterface.php';

require_once __DIR__ . '/../../Server/AbstractDatabaseServer.php';

use Potter\DBAL\Server\AbstractDatabaseServer;

abstract class AbstractPDOConnection extends AbstractDatabaseServer implements PDOConnectionInterface
{
    
}