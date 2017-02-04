<?php

namespace Lib;

class Messages
{
    private $messages = [];

    public function __construct()
    {
        if (!isset($_SESSION['messages'])) {
            $this->init();
        }
    }

    public function init()
    {
        $_SESSION['messages'] = [
            'error' => [],
            'success' => []
        ];
    }

    public function error($message)
    {
        $_SESSION['messages']['error'][] = $message;
    }
    public function success($message)
    {
        $_SESSION['messages']['success'][] = $message;
    }

    public function get($type = null)
    {
        return ($type == null) ? $_SESSION['messages'] : $_SESSION['messages'][$type];
    }

    public function clear()
    {
        $this->init();
    }
}
