<?php
$request = $_SERVER['REQUEST_URI'];
$viewDir = '/view/';

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'index.php';
        break;
    case 'views/freedom':
        require __DIR__ . $viewDir . 'freedom.php';
        break;
    case 'views/projects':
        require __DIR__ . $viewDir . 'projects.php';
        break;
    case 'views/starpoint-thesis':
        require __DIR__ . $viewDir . 'starpoint-thesis.php';
        break;
    case 'views/starpoint':
        require __DIR__ . $viewDir . 'starpoint.php';
        break;
    case 'views/sunchase':
        require __DIR__ . $viewDir . 'sunchase.php';
        break;
    
}