<?php

namespace Core\DB;

class Connector
{

    protected $config = [
        'host'=>'localhost',
        'user'=>'root',
        'password'=>'',
        'name' => 'phpmybd'
    ];

    public function __construct()
    {
        return $this->config;
//        $this->setConfig();
    }

//    protected function setConfig(){
//      return  $this->config = __DIR__ . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'DBphp.php';
//    }

    public function connectDB()
    {
        $connect = false;

        if (is_array($this->config) && !empty($this->config)){

            extract($this->config);

            $connect = mysqli_connect($host, $user, $password, $name);
        }

        return $connect;
    }
}