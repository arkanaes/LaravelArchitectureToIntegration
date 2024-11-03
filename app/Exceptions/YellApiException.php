<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\Response;
class YellApiException extends Exception
{
    public function __construct(protected string $message, protected Response $response) {}

    /**
     * Report the exception.
     *
     * @return void
     */
    public function report(): void
    {
        Log::channel('Yell')->error($this->message, [
            'body' => $this->response->body(),
            'status' => $this->response->status()
        ]);
    }
}
