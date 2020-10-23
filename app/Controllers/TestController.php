<?php

namespace App\Controllers;

use Core\DB\Connector;
use  Core\DB\DBRequests;
use Core\DB\Where;
use App\Models\UserRole;
use App\Models\Model;

class TestController extends ControllerV
{
    public function index()
    {
        $this->generate('index', 'index'  );
        $this->requests();
    }


    public function requests()
   {
      $model = new UserRole();

      $model->userRoleUpdate(['name' => 'admin'],['id'=>'9']);
   }

    public function admin(){
        $this->generate('index', 'adminIndex');
    }

}