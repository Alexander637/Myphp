<?php


namespace Core\DB;


class Delete
{
    private $connector;
    private $tableName = '';
    private $id = [];

    public function __construct()
    {
        $connectObj = new Connector();
        $this->connector = $connectObj->connectDB();
    }

    public function setId(array $id){
        if (!empty($id)){
        foreach ($id as $value){
            $this->id = $value;
        }
        }
    }

    public function  setTableName(string $name){
        $this->tableName = $name;
    }
    public function deleteData(){
        var_export($this->deleteString());
        return mysqli_query($this->connector,$this->deleteString());
    }
    protected function deleteString(){

    return 'DELETE FROM ' . $this->tableName  .'  WHERE id = ' . $this->id;

    }
}