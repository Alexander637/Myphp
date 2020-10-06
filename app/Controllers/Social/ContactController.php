<?php


namespace App\Controllers;


class ContactController extends ControllerV
{
    public function contact(){

        $this->generate('\social\contact');

    }
}