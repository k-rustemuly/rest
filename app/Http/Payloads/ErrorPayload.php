<?php
namespace App\Http\Payloads;

class ErrorPayload extends Payload
{
    protected $status = 400;

    public function __construct(string $message = null)
    {
        parent::__construct(array('success' => false, 'message' => $message), $this->status);
    }
}
