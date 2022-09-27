<?php

namespace L37sg0\DesignPatterns\Controllers;

class PatternsController extends Controller
{
    protected $view = '<h1>Patterns Page</h1>';

    public function __construct()
    {
        $designPatterns = scandir(__DIR__ . '/..');
        get_sidebar();
        parent::__construct();
    }
}