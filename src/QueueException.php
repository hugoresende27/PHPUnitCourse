<?php


class QueueException extends Exception
{
    // public string $message;
    // public int $code;

    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $this->message = $message;
        $this->code = $code;
    }
}