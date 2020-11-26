<?php

namespace Core\DB;


class Where
{

    private $where;

    public function setConditions(array $condition)
    {
        var_dump($condition);
        if(!empty($condition)) {
            foreach ($condition as $item => $value) {
                if(is_array($value) && !empty($this->where)){
                    foreach ($value as $item1 => $value1){
                        $this->where .= ' AND '  . $item1 . '=' . $value1;
                    }
                } else{
                    if(empty($this->where) && is_array($value)){
                        foreach ($value as $item1 => $value1){
                            $this->where .= $item1 . '=' . $value1;
                        }
                    } else{
                            $this->where .=  $item . '=' . $value;
                    }
                }
            }
        }
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