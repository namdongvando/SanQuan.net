<?php

namespace Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\Sql\Ddl;
use Zend\Db\Sql\TableIdentifier;

class Database {

    function Connect() {
        return new Adapter([
            "driver" => "Pdo_Mysql"
            , "database" => "bakcobox"
            , "username" => "root"
            , "password" => ""
            , "hostname" => "localhost"
            , "post" => "8080"
            , "chaset" => "utf-8"
        ]);
    }

    function Query($sql) {
        return $this->Connect()->query($sql, Adapter::QUERY_MODE_EXECUTE);
    }

    function ToRow($res) {
        return $res->current();
    }
    function ToArray($res) {
        return $res->toArray();
    }

    function CreateTable() {
        $table = new Ddl\CreateTable('users1');
        $ComId = new Ddl\Column\Integer("Id");
        $ComId->setOption('auto_increment', true);
        $table->addColumn($ComId);
        $table->addColumn(new Ddl\Column\Varchar("Name", 50));
        $table->addColumn(new Ddl\Column\Varchar("Username", 30));
        $table->addColumn(new Ddl\Column\Varchar("Email", 50));
        $table->addColumn(new Ddl\Column\Varchar("Group", 50));
        $table->addColumn(new Ddl\Column\Varchar("Password", 128));
        $table->addColumn(new Ddl\Column\Varchar("KeyPassword", 50));
        $table->addConstraint(new Ddl\Constraint\PrimaryKey("id"));
        $table->addConstraint(new Ddl\Constraint\UniqueKey(["Email"]));
        $table->addConstraint(new Ddl\Constraint\UniqueKey(["UserName"]));
        $adapter = $this->Connect();
        $sql = new \Zend\Db\Sql\Sql($adapter);
        $adapter->query(
                $sql->getSqlStringForSqlObject($table), $adapter::QUERY_MODE_EXECUTE
        );
    }

}

?>
