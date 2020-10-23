<?php

namespace Core\DB;


class Where
{
    private $columns;
    private $where;

    public function setConditions(array $condition = [])
    {
        if(!empty($condition)){
            foreach ($condition as $columnsName => $value){
                if (empty($this->columns)){
                    $this->where = $columnsName . '=' . $value;
                }
            }
        }
    }

    public function setWhere($where)
    {
        $this->where = $where;
    }

    public function createString()
    {
        $where = null;

        if(!empty($this->where)) {
           $where = ' WHERE ' . $this->where;
        }
        return $where;
    }
}