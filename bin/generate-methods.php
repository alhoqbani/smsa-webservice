<?php

require_once __DIR__ . '/../vendor/autoload.php';

use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;


$generator_options_file = __DIR__ . '/generator_options.yml';

// Options definition: the configuration file parameter is optional
$options = GeneratorOptions::instance($generator_options_file);
$options
    ->setOrigin('http://track.smsaexpress.com/SECOM/SMSAwebService.asmx?WSDL')
    ->setDestination('./MySdk')
    ->setComposerName('myproject/mysdk');

// Generator instantiation
$generator = new Generator($options);
// Package generation
$generator->generatePackage();


