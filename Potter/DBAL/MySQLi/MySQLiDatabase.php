<?php

namespace Potter\DBAL\MySQLi\Database;

use Potter\DBAL\Database\AbstractDatabase;
use Potter\DBAL\MySQL\Database\{
    MySQLDatabaseInterface,
    MySQLDatabaseTrait
};
    

final class MySQLiDatabase extends AbstractDatabase implements MySQLDatabaseInterface
{
    use MySQLDatabaseTrait;
}