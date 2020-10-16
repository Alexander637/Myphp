<?php


namespace Core\DB;


class DBRequests
{

    public function insertIntoDataBase(){
        $temp = new Insert();
        $temp->setTableName('userrole');
        $temp->setConditions(
            [
                'name' => 'admin'
            ]
        );
        $temp->execute();
    }
    public function deleteDataInDB(){
        $temp = new Delete();
        $temp->setTableName('userrole');
        $temp->setId(
            [
                'id' => 1
            ]
        );
        $temp->deleteData();
    }
    public  function updateDataInDB(){
        $temp = new Update();
        $temp->setTableName('userrole');
        $temp->setConditions(
            [
                'name' => 'user'
            ]
        );
        $temp->setId(
            [
                'id' => 2
            ]
        );
        $temp->updateData();
    }
}