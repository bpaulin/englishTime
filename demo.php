<?php 

require 'vendor/autoload.php';

use Bpaulin\EnglishTime\EnglishTime;

$examples = array(
  mktime(1,12),
  mktime(2,25),
  mktime(3,15),
  mktime(4,30),
  mktime(5,36),
  mktime(6,44),
  mktime(7,59),
  mktime(8,00),
);

foreach($examples as $example)
  echo EnglishTime::fromTimeStamp($example)."\n";
