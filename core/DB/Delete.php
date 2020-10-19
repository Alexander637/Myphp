<?php


namespace Core\DB;


class Delete
{
    private $tableName = '';

    public function  setTableName(string $name){
        $this->tableName = $name;
    }

    public function deleteString(){

    return 'DELETE FROM ' . $this->tableName;

    }
}