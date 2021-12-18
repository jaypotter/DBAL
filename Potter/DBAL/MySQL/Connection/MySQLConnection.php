<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\PDO\Connection\AbstractPDOConnection;

final class MySQLConnection extends AbstractPDOConnection implements MySQLConnectionInterface
{
    use MySQLConnectionTrait;
}