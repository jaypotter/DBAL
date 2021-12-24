<?php

namespace Potter\DBAL\Statement;

use Potter\DBAL\Server\DatabaseServerInterface;

interface StatementInterface
{
    public const PARAM_BOOL = -1;
    public const PARAM_STR  = 0;
    public const PARAM_INT  = 1;

    public function bindParam(int $index, int $type, mixed &$var): void;

    public function execute(): void;

    public function fetch(): array;
}