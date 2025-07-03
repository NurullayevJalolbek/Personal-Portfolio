<?php

namespace App\Exceptions;

use Exception;

class CustomErrorException extends Exception
{
    protected mixed $customMessage, $datas;
    protected int $customCode;

    public function __construct(mixed $customMessage, mixed $datas = null, int $customCode = 406)
    {
        $this->message = is_array($customMessage) ? implode(' | ', $customMessage) : $customMessage;
        $this->code = $customCode;
        $this->customMessage = $customMessage;
        $this->customCode = $customCode;
        $this->datas = $datas;
    }

    public function render()
    {
        return exception_response($this->customMessage, $this->datas, $this->getLine(),  $this->getFile(), $this->customCode);
    }
}
