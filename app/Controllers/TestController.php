<?php

namespace App\Controllers;

use App\Models\Users;
use Core\DB\Connector;
use  Core\DB\DBRequests;
use Core\DB\Where;
use App\Models\UserRole;
use App\Models\Model;

class TestController extends ControllerV
{
    public function index()
    {
        $model = new UserRole();

        $data = $model->userRoleSelect(['*']);

        $this->generate('index', 'index', $data );

    }


    public function admin(){
        $this->generate('index', 'adminIndex');
    }

}