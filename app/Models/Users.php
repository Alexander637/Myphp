<?php

namespace App\Models;



class Users extends Model
{
    public  $tableName = 'users';


    public function userRoleSelect($name)
    {
        parent::select($name, $this->tableName);
    }

    public function userRoleInsert($name)
    {
        parent::insert($this->tableName, $name);
    }

    public function userRoleUpdate( $params, $where)
    {
        parent::update($this->tableName, $params, $where);
    }

    public function userRoleDelete($where)
    {
        parent::delete($this->tableName, $where);
    }

}