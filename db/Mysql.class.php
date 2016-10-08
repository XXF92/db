<?php
namespace Git\db;
class Mysql implements IDatabase
{
    function connect()
    {
        // TODO: Implement connect() method.
        echo "database connect";
    }

    function query()
    {
        // TODO: Implement query() method.
        echo "database query";
    }

    function close()
    {
        // TODO: Implement close() method.
        echo "database close";
    }
}