<?php

namespace App\Controllers;

use Core\DB\Connector;
use  Core\DB\DBRequests;
use Core\DB\Where;

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

       return $temp->executeRequestsUpdate();
   }

    public function admin(){
        $this->generate('index', 'adminIndex');
    }

}