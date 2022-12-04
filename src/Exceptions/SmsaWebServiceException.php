<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SmsaWebService\Exceptions;

abstract class SmsaWebServiceException extends \Exception
{
    /**
     * @var \Alhoqbani\SmsaWebService\Response\SMSAResponse
     */
    public $smsaResponse;
}
