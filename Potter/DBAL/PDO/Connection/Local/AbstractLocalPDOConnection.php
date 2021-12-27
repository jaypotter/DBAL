<?php

namespace Potter\DBAL\PDO\Connection\Local;

use Potter\Connection\Local\AbstractLocalConnection;
use Potter\DBAL\{
    PDO\Connection\PDOConnectionTrait,
    Statement\StatementInterface
};

abstract class AbstractLocalPDOConnection extends AbstractLocalConnection implements LocalPDOConnectionInterface
{
    use PDOConnectionTrait;

    final public function prepare(string $statement, bool $immediate = false): StatementInterface
    {
        return $this->_prepare($this, $statement, $immediate);
    }
}