<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SmsaWebService\Response;

use WsdlToPhp\PackageBase\AbstractStructBase;

class SMSAResponse implements \JsonSerializable
{
    /**
     * @var bool
     */
    public $success;
    /**
     * @var array|string
     */
    public $data;
    /**
     * @var null|string
     */
    public $error;
    /**
     * @var string
     */
    public $type;
    /**
     * @var AbstractStructBase
     */
    public $payload;
    /**
     * @var \DOMDocument
     */
    public $request;
    /**
     * @var \DOMDocument
     */
    public $response;

    /**
     * SMSAResponse constructor.
     *
     * @param bool $success
     * @param null $data
     * @param null $error
     * @param      $type
     * @param      $payload
     * @param      $request
     * @param      $response
     */
    public function __construct(bool $success, $data = null, $error = null, string $type, $payload, $request, $response)
    {
        $this->success = $success;
        $this->data = $data;
        $this->type = $type;
        $this->payload = $payload;
        $this->request = $request;
        $this->response = $response;
        $this->error = ($error instanceof \SoapFault) ? $error->faultstring : $error;
    }

    /**
     * Specify data which should be serialized to JSON
     **
     *
     * @return mixed data which can be serialized by <b>json_encode</b>,
     *               which is a value of any type other than a resource.
     *
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [
          'success'    => $this->success,
          'data'       => $this->data,
          'error'      => $this->error,
          'type'       => $this->type,
          'payload'    => $this->payload->jsonSerialize(),
          'request'    => $this->request->saveXML(),
          'response'   => $this->response->saveXML(),
        ];
    }
}
