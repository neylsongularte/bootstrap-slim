<?php
require(__DIR__ . '/../vendor/autoload.php');

use Illuminate\Database\Capsule\Manager as Capsule;

$fileDatabase = __DIR__ . '/../database.sqlite';
exec('touch ' . $fileDatabase); // create file
exec('> ' . $fileDatabase); // clean database

require(__DIR__ . '/bootEloquent.php');

// criar as tabelas
Capsule::schema()->create('pessoas', function($table)
{
    $table->increments('id');
    $table->string('nome');
    $table->timestamps();
});
