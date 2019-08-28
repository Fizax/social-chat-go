<?php
/**
 * Created by PhpStorm.
 * User: Bas
 * Date: 27-8-2019
 * Time: 16:03
 */
$dbHost = 'localhost';
$dbName = 'socialapp';
$dbUser = 'root';
$dbPass = '';

$db = new PDO(
    "mysql:host=$dbHost;dbname=$dbName",
    $dbUser,
    $dbPass
);
// hier vang die de error op
$db->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);

if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    // session is niet gestard
    session_start();
}