<?php

namespace Potter\DBAL\MySQL;

use \mysqli_stmt;

use Potter\DBAL\{
    MySQL\Connection\MySQLiConnection,
    Statement\AbstractStatement
};

final class MySQLiStatement extends AbstractStatement
{
    private mysqli_stmt $statement;

    public function __construct(MySQLiConnection $connection, string $statement)
    {
        $this->statement = $connection->getHandle()->prepare($statement);
    }

    public function execute(): void
    {
        $this->statement->execute();
    }
}