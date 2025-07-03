<?php

namespace App\Exceptions;

use Exception;

class CustomApiErrorException extends Exception
{
    protected mixed $customMessage;
    protected int $customCode;

    public function __construct(mixed $customMessage, int $customCode)
    {
        $this->message = is_array($customMessage) ? implode(' | ', $customMessage) : $customMessage;
        $this->code = $customCode;
        $this->customMessage = $customMessage;
        $this->code = $customCode;
    }

    public function render()
    {
        return response()->json($this->customMessage, $this->code);
    }
}
