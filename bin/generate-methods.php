<?php

require_once __DIR__ . '/../vendor/autoload.php';

use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;


$generator_options_file = __DIR__ . '/generator_options.yml';

// Options definition: the configuration file parameter is optional
$options = GeneratorOptions::instance($generator_options_file);

$options->setAddComments([
    "date" => date("Y/m/d"),
    "codeVersion" => "0.0.1",
]);

// Generator instantiation
$generator = new Generator($options);
// Package generation
$generator->generatePackage();


