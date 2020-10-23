<?php

namespace App\Models;

use Core\DB\DBRequests;

class Model
{
    public function select($params, $tb_name )
    {
        $requests = new DBRequests();
        $requests->selectDataInDb($tb_name, $params);

        $requests->executeRequestsSelect($tb_name, $params);
    }

    public function delete($tb_name, $where)
    {
        $requests = new DBRequests();
        $requests->deleteDataInDB($tb_name);
        $requests->whereDataInDb($where);
        $requests->executeRequestsDelete($tb_name,$where);
    }

    public function insert($tb_name, $params)
    {
        $requests = new DBRequests();
        $requests->insertIntoDataBase($tb_name, $params);
        $requests->executeRequestsInsert($tb_name, $params);
    }

    public function update($tb_name, $params, $where)
    {
        $requests = new DBRequests();
        $requests->updateDataInDB($tb_name, $params);
        $requests->whereDataInDb($where);
        $requests->executeRequestsUpdate($tb_name, $params, $where);
    }
}