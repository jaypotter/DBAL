<?php

namespace Potter\DBAL\PDO;

use \PDO, \PDOStatement as NativePDOStatement;

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

    public function bindParam(int $index, int $type, mixed &$var): void
    {
        $this->statement->bindParam(
            param: $index,
            type: $this->matchParamType($type),
            var: $var
        );
    }

    public function execute(): void
    {
        $this->statement->execute();
    }

    public function fetch(): array
    {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    private function matchParamType(int $constant): int
    {
        switch ($constant) {
            case self::PARAM_BOOL:
                return PDO::PARAM_BOOL;
            case self::PARAM_INT:
                return PDO::PARAM_INT;
            case self::PARAM_STR:
            default:
                return PDO::PARAM_STR;
        }
    }
}