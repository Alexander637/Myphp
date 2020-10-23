<?php

namespace app\Models;

use Core\DB\Select;


class Users
{
    public  $tableName = 'users';

    public  function getTableName(){
        return $this->tableName;
    }

    public $id;
    public $name;
    public $surname;
    public $email;
    public $login;
    public $password;
    public $userRole;
    public $dataCreate;
    public $dataUpdate;

    public function saveUser()
    {

    }
    public function deleteUser()
    {

    }
    public function getUser(int $id){
        if($id > 0){
            $objSelect = new Select();
            $objSelect->setTableName($this->tableName);
            $objSelect->setWhere($id);
            $objSelect->setJoin('userrole', 'users userRole = name.id' );
            $objSelect->execute();
        }
    }

    public function getUsers()
    {

    }
}