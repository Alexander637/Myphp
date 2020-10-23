<?php
namespace Core\DB;

class Insert
{
    private $tableName = '';
    private $columns ='';
    private $values ='';


    public function  setTableName(string $name){
        $this->tableName = $name;
    }

    public function setConditions(array $condition = []){
        if(!empty($condition)){
            foreach ($condition as $columnsName => $value){
                if (empty($this->columns)){
                    $this->columns = $columnsName;
                    $this->values = '\'' . $value . '\'';
                } else{
                    $this->columns = ',' . $columnsName;
                    $this->values = ',' . '\'' . $value . '\'';
                }
            }
        }
    }

    public function createString(){
        return 'INSERT INTO ' . $this->tableName . '(' . $this ->columns . ') VALUES (' . $this->values . ')';
    }
}