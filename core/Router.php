<?php


namespace Core;


class Router
{
 private $prop = 'routing...';

 public function getVar()
 {
     return $this->prop;
 }

 public function run($var)
 {
     var_dump($var);
 }

}