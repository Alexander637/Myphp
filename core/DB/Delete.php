<?php


namespace Core\DB;


class Delete
{
    private $connector;
    private $tableName = '';
//    private $id = [];

//    public function __construct()
//    {
//        $connectObj = new Connector();
//        $this->connector = $connectObj->connectDB();
//    }

//    public function setId($id){
//        if (!empty($id)){
//            $this->id = $id;
//        }
//    }

    public function  setTableName(string $name){
        $this->tableName = $name;
    }
//    public function deleteData(){
////        var_export($this->deleteString());
//        return mysqli_query($this->connector,$this->deleteString());
//    }
    public function deleteString(){

    return 'DELETE FROM ' . $this->tableName;  //.'  WHERE id = ' . $this->id;

    }
}