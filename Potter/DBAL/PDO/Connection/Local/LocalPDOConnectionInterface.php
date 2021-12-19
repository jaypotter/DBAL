<?php

namespace Potter\DBAL\PDO\Connection\Local;

use Potter\{
    Connection\Local\LocalConnectionInterface,
    DBAL\PDO\Connection\PDOConnectionInterface
};                

interface LocalPDOConnectionInterface extends LocalConnectionInterface, PDOConnectionInterface
{

}