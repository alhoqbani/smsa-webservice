<?php

/*
 * This file is part of SMSA WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__.'/../vendor/autoload.php';

$smsa = new \Alhoqbani\SMSAWebService\SMSA();

$pdf = $smsa->awbPDF('290018465508');

var_dump($pdf);
