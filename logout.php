<?php
/**
 * Created by PhpStorm.
 * User: Bas
 * Date: 27-8-2019
 * Time: 16:10
 */

session_start();
session_destroy();
header('location: index.php');