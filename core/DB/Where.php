<?php

namespace Core\DB;


class Where
{
    private $connector;
    private $columns;
//    private $values;
    private $where;

    public function __construct()
    {
        $connectObj = new Connector();
        $this->connector = $connectObj->connectDB();
    }
    public function setWhere($where){
        $this->where = $where;
    }

    public function setConditions(array $condition = []){
        if(!empty($condition)){
            foreach ($condition as $columnsName => $value){
                if (empty($this->columns)){
                    $this->where = $columnsName . '=' . $value;
//                    $this->columns = $columnsName;
//                    $this->values = $value ;
                }
            }
        }
    }

//   public function execute(){
//        var_dump($this->createString());
//        return mysqli_query($this->connector, $this->createString());
//   }

    public function createString(){
        if(!empty($this->where)) {
            return ' WHERE ' . $this->where; //$this->columns . '=' . $this->values;
        }
    }
}