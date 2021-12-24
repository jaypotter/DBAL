<?php

namespace Potter\DBAL\PDO\Connection\Local;

use Potter\{
    Connection\Local\AbstractLocalConnection,
    DBAL\PDO\Connection\PDOConnectionTrait
};

abstract class AbstractLocalPDOConnection extends AbstractLocalConnection implements LocalPDOConnectionInterface
{
    use PDOConnectionTrait;
}