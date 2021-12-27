<?php

namespace Potter\DBAL\PDO\Connection\Remote;

use Potter\Connection\Remote\AbstractRemoteConnection;
use Potter\DBAL\{
    PDO\Connection\PDOConnectionTrait,
    Statement\StatementInterface
};

abstract class AbstractRemotePDOConnection extends AbstractRemoteConnection implements RemotePDOConnectionInterface
{
    use PDOConnectionTrait;

    final public function prepare(string $statement, bool $immediate = false): StatementInterface
    {
        return $this->_prepare($this, $statement, $immediate);
    }
}