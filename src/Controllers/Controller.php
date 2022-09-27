<?php

namespace L37sg0\DesignPatterns\Controllers;

abstract class Controller
{
    protected $view;

    public function __construct() {
        echo $this->view;
    }
}