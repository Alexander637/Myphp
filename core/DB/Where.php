<?php

namespace Core\DB;


class Where
{
    private $columns;
    private $where;

    public function setConditions(array $condition = []){
        if(!empty($condition)){
            foreach ($condition as $columnsName => $value){
                if (empty($this->columns)){
                    $this->where = $columnsName . '=' . $value;
                }
            }
        }
    }

    public function createString(){
        if(!empty($this->where)) {
            return ' WHERE ' . $this->where; //$this->columns . '=' . $this->values;
        }
    }
}