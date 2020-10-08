<?php


namespace App\Controllers;


class RegistrationController extends ControllerV
{
public function registration(){
$this->generate('registration', 'adminIndex');
}
}