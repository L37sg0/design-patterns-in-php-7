<?php

use L37sg0\DesignPatterns\Controllers\AboutController;
use L37sg0\DesignPatterns\Controllers\HomeController;
use L37sg0\DesignPatterns\Controllers\NotFoundController;
use L37sg0\DesignPatterns\Controllers\PatternsController;

const SETTINGS = [
    'title' => 'L37sg0/DesignPatterns',
    'css'   => '
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                ',
    'js'    => '
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
                '
];

const PAGES = [
    'Home'  => [
        'href'  =>'/',
        'controller' => HomeController::class
    ],
    'DesignPatterns'    => [
        'href'  => '/design-patterns',
        'controller'    => PatternsController::class,
    ],
    'About' => [
        'href'  => '/about',
        'controller'    => AboutController::class
    ]
];

function get_header() {
    include './header.php';
}

function get_footer() {
    include './footer.php';
}

function get_sidebar() {
    include './sidebar.php';
}

function get_head() {
    return SETTINGS['css'];
}

function get_foot() {
    return SETTINGS['js'];
}

function get_title() {
    return SETTINGS['title'];
}

function get_content() {
    foreach (PAGES as $page => $params) {
        if (array_search($_SERVER['REQUEST_URI'], $params)) {
            return new $params['controller'];
        }
    }
    return new NotFoundController();
}
