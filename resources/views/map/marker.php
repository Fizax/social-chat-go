<?php
//header('Content-Type: application/json');
////$dbHost = 'localhost';
////$dbUser = 'root';
////$dbPss = '';
////$dbName = 'socialapp';
////
////
////$db = new pdo(
////    "mysql:host=$dbHost;dbname=$dbName",
////    $dbUser,
////    $dbPss
////);
////
////$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
////
////$sql = ("SELECT u.lon as lng, u.lat as lat
////        FROM users as u ");
////$query = $db->query($sql);
////$coords = $query->fetchAll(PDO::FETCH_ASSOC);
//
// $_GET(['lng']);
// $_GET(['lat']);
//
//echo json_encode($coords);



header('Content-Type: application/json');
$marker = array(
    ['lat'=>1.7788481178788205,'lng'=>51.60656920854833],
    ['lat'=>3.7788481178788205,'lng'=>51.60656920854833],
    ['lat'=>2.7788481178788205,'lng'=>51.60656920854833]
);

$_GET['lat'];
$_GET['lng'];

echo json_encode($marker);
