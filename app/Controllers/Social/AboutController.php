<?php


namespace App\Controllers;


class AboutController extends ControllerV
{
    public function about(){
        $this->generate('\social\about');
    }
}