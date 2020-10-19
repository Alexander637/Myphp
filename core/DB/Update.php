<?php


namespace Core\DB;


class Update
{
    private $tableName = '';
    private $columns ='';
    private $values;

    public function setConditions(array $condition = []){
        if(!empty($condition)){
            foreach ($condition as $columnsName => $value){
                if (empty($this->columns)){
                    $this->values = $columnsName . '= \'' . $value . '\'';

                } else{
                    $this->values = ',' . $columnsName . '= \'' . $value . '\'';

                }
            }
        }
    }

    public function  setTableName(string $name){
        $this->tableName = $name;
    }


    public function updateString()
    {
        return 'UPDATE ' . $this->tableName . ' SET ' .  $this->values; //' WHERE id=' . $this->id;

    }
}