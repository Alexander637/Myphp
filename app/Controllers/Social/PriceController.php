<?php


namespace App\Controllers;


class PriceController extends ControllerV
{
    public function price(){

        $this->generate('price', 'index');

    }
}