<?php

namespace Potter\DBAL\MySQL\Database;

use Potter\DBAL\PDO\Database\AbstractPDO;

abstract class AbstractMySQLDatabase extends AbstractPDO implements MySQLDatabaseInterface
{
    use MySQLDatabaseTrait;
}