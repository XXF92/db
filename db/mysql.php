<?php
namespace Git\db;
interface IDatabase
{
    function connect();
    function query();
    function close();
}