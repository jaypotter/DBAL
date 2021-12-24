<?php

namespace Potter\DBAL\MySQL;

use \mysqli_stmt;

use Potter\DBAL\{
    MySQL\Connection\MySQLiConnection,
    Statement\AbstractStatement
};

final class MySQLiStatement extends AbstractStatement
{
    private const MYSQL_INT = 'i';
    private const MYSQL_STR = 's';

    private mysqli_stmt $statement;
    private array $params = [];

    public function __construct(MySQLiConnection $connection, string $statement)
    {
        $this->statement = $connection->getHandle()->prepare($statement);
    }

    public function bindParam(int $index, int $type, mixed &$var): void
    {
        $this->params[$index] = [$type, &$var];
    }

    public function execute(): void
    {
        if (empty($this->params)) {
            $this->statement->execute();
            return;
        }
        ksort($this->params);
        $params = [];
        foreach ($this->params as $param) {
            array_push($params, $param[1]);
        }
        $this->statement->bind_param(
            $this->getParamTypes(),
            ...$params
        );
        $this->statement->execute();
    }

    public function fetch(): array
    {
        return $this->statement->get_result()->fetch_all();
    }

    private function getParamTypes(): string
    {
        $types = '';
        foreach ($this->params as $param) {
            $types .= $this->matchParamType($param[0]);
        }
        return $types;
    }

    private function matchParamType(int $constant): string
    {
        switch ($constant) {
            case self::PARAM_BOOL:
            case self::PARAM_INT:
                return self::MYSQL_INT;
            case self::PARAM_STR:
            default:
                return self::MYSQL_STR;
        }
    }
}