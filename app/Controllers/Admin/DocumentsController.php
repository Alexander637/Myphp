<?php


namespace App\Controllers;


class DocumentsController extends ControllerV
{
    public function documents(){

        $this->generate('documents','adminIndex');

    }
}