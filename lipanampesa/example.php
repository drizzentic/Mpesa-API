<?php
/**
 * This code is Jamhuri special and it enables you to access buygoods functionality
 * from any system build on top of php.
 * @author Derrick Rono <derrickrono@gmail.com>
 */
require_once('config/Constant.php');
require_once('lib/MpesaAPI.php');


$Password=Constant::generateHash();
$mpesaclient=new MpesaAPI;

$mpesaclient->processCheckOutRequest($Password,MERCHANT_ID,"1232434","123454","60","254713038301",URL);


?>