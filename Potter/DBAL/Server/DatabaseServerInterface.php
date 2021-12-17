<?php

namespace Potter\DBAL\Server;

interface DatabaseServerInterface
{
    public function connect(): void;

    public function disconnect(): void;
}