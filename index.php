<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sasha
 * Date: 22.09.13
 * Time: 12:06
 * To change this template use File | Settings | File Templates.
 */
include_once 'android.php';

$name = 'sasha';
$number = 380987654321;
$model = 'htc';
$htc = new android($model);
$htc->addContact($name, $number);
$htc->addContact($name, $number);
$sms = 'Hello, world!';
$htc->write_sms($sms);
var_dump($htc);
var_dump($htc->getOS());