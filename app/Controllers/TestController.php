<?php

namespace App\Controllers;

use  Core\DB\DBRequests;

class TestController extends ControllerV
{
    public function index()
    {
        $this->generate('index', 'index'  );
        $this->requests();
    }
   public function requests()
   {
        $temp = new DBRequests();
        $temp->insertIntoDataBase();
        $temp->deleteDataInDB();
        $temp->updateDataInDB();
   }
   
    public function admin(){
        $this->generate('index', 'adminIndex');
    }

}