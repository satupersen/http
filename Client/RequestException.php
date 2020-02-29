<?php

namespace Satupersen\Http\Client;

use Exception;

class RequestException extends Exception
{
    /**
     * The response instance.
     *
     * @var \Satupersen\Http\Client\Response
     */
    public $response;

    /**
     * Create a new exception instance.
     *
     * @param  \Satupersen\Http\Client\Response  $response
     * @return void
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
    }
}
