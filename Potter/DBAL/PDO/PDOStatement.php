<?php

namespace Potter\DBAL\PDO;

use \PDOStatement as NativePDOStatement;

use Potter\DBAL\{
    PDO\Connection\PDOConnectionInterface,
    Statement\AbstractStatement
};

final class PDOStatement extends AbstractStatement
{
    private NativePDOStatement $statement;

    public function __construct(PDOConnectionInterface $connection, string $statement)
    {
        $this->statement = $connection->getHandle()->prepare($statement);
    }
}