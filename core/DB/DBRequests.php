<?php


namespace Core\DB;


class DBRequests
{
    private $connector;

    public function __construct()
    {
        $connectObj = new Connector();
        $this->connector = $connectObj->connectDB();
    }

    public function whereDataInDb($id){
        $temp = new Where();
        $temp->setConditions(
           $id
        );

        return $temp->createString();
    }

    public function selectDataInDb($tb_name, $params){
        $temp = new Select();
        $temp->setConditions(
          $params
        );
        $temp->setTableName($tb_name);

        return $temp->createString();
    }

    public function  executeRequestsSelect($tb_name, $params){

        return mysqli_query($this->connector, $this->selectDataInDb($tb_name, $params));
    }

    public function insertIntoDataBase($tb_name, $params){
        $temp = new Insert();
        $temp->setTableName($tb_name);
        $temp->setConditions(
           $params
        );
        return $temp->createString();
    }

    public function executeRequestsInsert($tb_name, $params)
    {
        return mysqli_query( $this->connector, $this->insertIntoDataBase($tb_name, $params));
    }

    public function deleteDataInDB($tb_name){
        $temp = new Delete();
        $temp->setTableName($tb_name);

        return $temp->deleteString();
    }

    public function executeRequestsDelete($tb_name, $id)
    {
        $sqlStr1 = $this->deleteDataInDB($tb_name);
        $sqlStr2 = $this->whereDataInDb($id);
        $sqlStr = $sqlStr1 . $sqlStr2;

        return mysqli_query( $this->connector, $sqlStr );
    }

    public  function updateDataInDB($tb_name, $params){
        $temp = new Update();
        $temp->setTableName($tb_name);
        $temp->setConditions(
           $params
        );

       return $temp->updateString();
    }

    public function executeRequestsUpdate($tb_name, $params, $where)
    {
        $sqlStr1 =$this->updateDataInDB($tb_name, $params);
        $sqlStr2 =$this->whereDataInDb($where);
        $sqlStr = $sqlStr1 . $sqlStr2;

        return mysqli_query( $this->connector, $sqlStr );
    }



}