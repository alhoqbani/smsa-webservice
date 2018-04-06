<?php

require_once __DIR__ . '/../vendor/autoload.php';

$smsa = new \Alhoqbani\SMSAWebService\SMSA();


$pdf = $smsa->awbPDF( '290018465508');



var_dump( $pdf );
