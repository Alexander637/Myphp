<?php


namespace Core\DB;


class Update
{
//    private $connector;
    private $tableName = '';
    private $columns ='';
    private $values;
//    private $id;

//    public function __construct()
//    {
//        $connectObj = new Connector();
//        $this->connector = $connectObj->connectDB();
//    }

//    public function setId($id){
//        if (!empty($id)){
//                $this->id = $id;
//        }
//    }

    public function setConditions(array $condition = []){
        if(!empty($condition)){
            foreach ($condition as $columnsName => $value){
                if (empty($this->columns)){
                    $this->values = $columnsName . '= \'' . $value . '\'';
//                    $this->columns = $columnsName;
//                    $this->values = '\'' . $value . '\'';
                } else{
                    $this->values = ',' . $columnsName . '= \'' . $value . '\'';
//                    $this->columns = ',' . $columnsName;
//                    $this->values = ',' . '\'' . $value . '\'';
                }
            }
        }
    }

    public function  setTableName(string $name){
        $this->tableName = $name;
    }
//    public function updateData(){
//       var_export($this->updateString());
//        return mysqli_query($this->connector, $this->updateString());
//    }

    public function updateString()
    {
        return 'UPDATE ' . $this->tableName . ' SET ' .  $this->values; //' WHERE id=' . $this->id;

    }
}