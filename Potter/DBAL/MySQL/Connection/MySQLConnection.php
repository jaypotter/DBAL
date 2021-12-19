<?php

namespace Potter\DBAL\MySQL\Connection;

use Potter\DBAL\PDO\Connection\Remote\AbstractRemotePDOConnection;

final class MySQLConnection extends AbstractRemotePDOConnection implements MySQLConnectionInterface
{
    use MySQLConnectionTrait;
}