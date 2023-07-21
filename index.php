<?php

// use chillerlan\QRCode\QRCode;

use App\db\Connect;
use App\Person;

require_once 'vendor/autoload.php';
system("clear");

// $faker = Faker\Factory::create();
// echo $faker->name(); 
// echo $faker->email(); 
// echo $faker->address(); 

// $qr = new QRCode();
// echo "<img src='".$qr->render('Man U Lee Pl')."'/>";


// use Monolog\Level;
// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;


// // create a log channel
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('logs/message.log', Level::Warning));

// // add records to the log
// $log->warning('Foo');
// $log->error('Bar');

// $me = new Person("Kyaw");
// var_dump($me);

$conn = new Connect;
var_dump($conn->connection());