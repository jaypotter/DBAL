<?php

namespace Potter\DBAL\Database;

interface DatabaseInterface
{
    public function getName(): string;

    public function query(string $query): array;
}