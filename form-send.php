<?php
/**
 * Form send
 * PHP version 7.1
 *
 * @category Check
 * @package  PackageName
 * @author   Sheyko Bogdan <afisttiik@gmail.com>
 * @license  https://mysite.ua PHP License
 * @link     https://mysite.ua
 */

require_once 'function.php';

if (!empty($_POST["amount_day"])) {
    $amountDay = checkInput($_POST["amount_day"]);
}

$country = $_POST["country"];
$checkbox = $_POST["checkbox"];
$discount = 0.95;
$peiceArray = [
    "turkey" => 100,
    "egypt" => 110,
    "italy" => 120
];

//[
//    "978"=> 32.3,
//    "643"=> 0.42,
//    "840"=> 26.2,
//    "990"=> 1,
//]

$json = '{"foo-bar": 12345}';

$obj = json_decode($json);
print $obj->{'foo-bar'}; // 12345

//if (checkNumeric($amountDay)) {
//    $amountDay = (int)$amountDay;
//    if ($checkbox) {
//        echo $peiceArray[$country] * $amountDay * $discount."$";
//    } else {
//        echo $peiceArray[$country] * $amountDay."$";
//    }
//
//}
