<?php

namespace App\Exceptions;

use Exception;

class IncorrectData extends Exception
{
    protected $message = 'Incorrect data';
    protected $data;
    public $status = 403;

    public function withMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    public function withData($data)
    {
        $this->data = $data;
        return $this;
    }


    public function render($data)
    {
        return response([
            'error' => $this->message,
            'data' => $this->data,
        ], 401);
    }
}
