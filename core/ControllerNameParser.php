<?php


namespace Core;


class ControllerNameParser
{
    /** @var  $controllerNamespace */
    protected $controllerNamespace = '';

    /** @var  $actionName */
    protected $actionName = '';

    /** @var  $errorMessage */
    protected $errorMessage = '';

    /**
     * Parse controller name and controller action
     *
     * @param $controller
     * @return bool
     */
    public function parse($controller):bool
    {
        $parts = explode('@', $controller);

        if (2 !== \count($parts) || \in_array('', $parts, true)) {
            $this->errorMessage = sprintf('The "%s" controller is not a valid "a@b" controller string.', $controller);
            return false;
        }

        $originalController = $controller;
        list($controller, $action) = $parts;

        $controller = str_replace('/', '\\', $controller);

        $try = 'App\\Controllers\\' .  ucfirst($controller) . 'Controller';
//
        var_dump($try);

        if (class_exists($try)) {
//            echo 1;
//            die();
            $this->controllerNamespace = $try;
            $this->actionName = $action;
            return true;
        }else {
            $this->errorMessage = sprintf('Unable to find controller "%s" ', $originalController);
            return false;
        }
    }

    /**
     * @return string
     */
    public function getController():string
    {
        return $this->controllerNamespace;
    }

    /**
     * @return string
     */
    public function getActionName():string
    {
        return $this->actionName;
    }

    /**
     * @return string
     */
    public function getErrorMessage():string
    {
        return $this->errorMessage;
    }
    }