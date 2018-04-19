<?php
/**
 * CURRENCY CONVERTER
 * PHP version 7.1
 *
 * @category Check
 * @package  PackageName
 * @author   Sheyko Bogdan <afisttiik@gmail.com>
 * @license  https://mysite.ua PHP License
 * @link     https://mysite.ua
 */


require_once 'lib\FormProcessing.class.php';
require_once 'lib\ReadFile.class.php';
require_once 'lib\CurrencyConverter.class.php';
use lib\FormProcessing as form;
use lib\ReadFile as read;
use lib\CurrencyConverter as convert;

$form_date = new form\FormProcessing($_POST);
$date = $form_date->getData();

$readFileJson = new read\ReadFile('https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');
$readFilePhp = $readFileJson->readFile();

$convert = new convert\CurrencyConverter($date, $readFilePhp);
$test = $convert->getVal();
echo $test;
