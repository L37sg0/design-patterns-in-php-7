<?php

namespace L37sg0\DesignPatterns\Controllers;

class NotFoundController extends Controller
{
    protected $view = '
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column text-center">
        <h1>404! Page NOT Found!</h1>
        <p class="lead">We really sorry, but the page you\'re trying to access does NOT exist.</p>
        <p class="lead">We really suggest you to go back.</p>
        <p class="lead">
          <a href="/" class="btn btn-lg btn-secondary fw-bold border-warning bg-danger">Home Page</a>
        </p>
        </div>
    ';

    public function __construct()
    {
        parent::__construct();
    }
}