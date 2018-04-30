<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SmsaWebService\Exceptions;

use Alhoqbani\SmsaWebService\Response\SMSAResponse;
use Throwable;

class RequestError extends SmsaWebServiceException
{
    public function __construct(SMSAResponse $smsaResponse, string $message = '', int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->smsaResponse = $smsaResponse;
    }
}
