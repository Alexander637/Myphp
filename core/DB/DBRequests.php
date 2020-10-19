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

    public function whereDataInDb(){
        $temp = new Where();
        $temp->setConditions(
            [
             'id' => 5
            ]
        );

        return $temp->createString();
    }

    public function selectDataInDb(){
        $temp = new Select();
        $temp->setConditions(
            [
                '*'
            ]
        );
        $temp->setTableName('userrole');

        return $temp->createString();
    }

    public function  executeRequestsSelect(){

        return mysqli_query($this->connector, $this->selectDataInDb());
    }

    public function insertIntoDataBase(){
        $temp = new Insert();
        $temp->setTableName('userrole');
        $temp->setConditions(
            [
                'name' => 'admin'
            ]
        );
        return $temp->createString();
    }

    public function executeRequestsInsert()
    {
        return mysqli_query( $this->connector, $this->insertIntoDataBase() );
    }

    public function deleteDataInDB(){
        $temp = new Delete();
        $temp->setTableName('userrole');

        return $temp->deleteString();
    }

    public function executeRequestsDelete()
    {
        $sqlStr1 =$this->deleteDataInDB();
        $sqlStr2 =$this->whereDataInDb();
        $sqlStr = $sqlStr1 . $sqlStr2;

        return mysqli_query( $this->connector, $sqlStr );
    }


    public  function updateDataInDB(){
        $temp = new Update();
        $temp->setTableName('userrole');
        $temp->setConditions(
            [
                'name' => 'admin'
            ]
        );

       return $temp->updateString();
    }

    public function executeRequestsUpdate()
    {
        $sqlStr1 =$this->updateDataInDB();
        $sqlStr2 =$this->whereDataInDb();
        $sqlStr = $sqlStr1 . $sqlStr2;

        return mysqli_query( $this->connector, $sqlStr );
    }



}