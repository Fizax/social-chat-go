<?php

header('Content-Type: application/json');
//
//
//$dbHost = 'localhost';
//$dbName = 'socialapp';
//$dbUser = 'root';
//$dbPass = '';
//
//$db = new PDO(
//    "mysql:host=$dbHost;dbname=$dbName",
//    $dbUser,
//    $dbPass
//);
//// hier vang die de error op
//$db->setAttribute(
//    PDO::ATTR_ERRMODE,
//    PDO::ERRMODE_EXCEPTION

/* data uit database terug naar vorig form
Haal alle data op uit de user tabellen welke beschikbaar zijn
$marker = array(
    ['lat'=>1.7788481178788205,'lng'=>51.60656920854833],
    ['lat'=>3.7788481178788205,'lng'=>51.60656920854833],
    ['lat'=>2.7788481178788205,'lng'=>51.60656920854833]
);
*/

$coords = \DB::select('SELECT lat, lon as lng, name FROM users');

$lat = $_GET['lat'];
$lon = $_GET['lng'];

$user = auth()->user();
        $userId = $user->id;
        // locatie ophalen en opslaan in het database
        \DB::table('users')
            ->where('id', $userId)
            ->update([
                'lon' => $lat,
                'lat' => $lon

            ]);






/*data vanaf het formulier, dus update user table data
Plaats deze data in de user tabel doormiddel vam een update */


echo json_encode($coords);
