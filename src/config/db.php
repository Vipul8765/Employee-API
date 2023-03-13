<?php

class db {
    public $host = '127.0.0.1';
    public $user = 'root';
    public $pass = '';
    public $dbname = 'project1';
    public $conn;

public function connect(){
    $db = [
      'driver' => 'mysql',
      'host' => 'localhost',
      'database' => 'project1',
      'username' => 'root',
      'password' => '',
      'charset' => 'utf8',
      'collation' => 'utf8_unicode_ci',
    ];

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($db);
$capsule->setAsGlobal();
$capsule->bootEloquent();
  
return $capsule;
        
      }
    }
?>