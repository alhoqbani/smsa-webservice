<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__.'/../vendor/autoload.php';

$smsa = new \Alhoqbani\SmsaWebService\Smsa();

$pdf = $smsa->awbPDF('290018465508');

var_dump($pdf);
