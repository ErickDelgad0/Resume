<?php

function pdo_connect_mysql() {
    // Read from .env file
    $envPath = __DIR__ . '/../../.env';
    if (!file_exists($envPath)) {
        $envPath = __DIR__ . '/../.env';
    }
    $dbconfig = parse_ini_file($envPath);


    $DATABASE_HOST = isset($dbconfig["MYSQL_HOST"]) ? $dbconfig["MYSQL_HOST"] : 'db';
    $DATABASE_USER = $dbconfig["MYSQL_USER"];
    $DATABASE_PASS = $dbconfig["MYSQL_PASSWORD"];
    $DATABASE_NAME = $dbconfig["MYSQL_DATABASE"];

    try {
        $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // It's good to set error mode to exception for better error handling
        return $pdo;
    } catch (PDOException $exception) {
        // Display the actual error from PDO for better troubleshooting
        exit('Database connection error: ' . $exception->getMessage());
    }
}

function Resume_Header() {
    echo <<<EOT
    <div class="container">
        <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Resume</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Projects</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
        </header>
    </div>
    EOT;
}