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
    }

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