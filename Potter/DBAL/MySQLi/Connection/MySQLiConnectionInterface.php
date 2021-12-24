<?php

namespace Potter\DBAL\MySQLi\Connection;

use \MySQLi;
use Potter\DBAL\MySQL\Connection\MySQLConnectionInterface;

interface MySQLiConnectionInterface extends MySQLConnectionInterface
{
    public function getHandle(): MySQLi;

    public function setHandle(MySQLi $handle): void;
}