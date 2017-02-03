<?php

namespace Lib;

class Messages
{
    private $messages = [];

    public function __construct()
    {
        $this->messages = [
            'error' => [],
            'success' => []
        ];
    }

    public function error($message)
    {
        $this->messages['error'][] = $message;
    }
    public function success($message)
    {
        $this->messages['success'][] = $message;
    }

    public function get($type = null)
    {
        return ($type == null) ? $this->messages : $this->messages[$type];
    }
}
