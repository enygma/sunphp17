<?php

namespace App\Controller;

class IndexController extends \App\Controller\BaseController
{
    public function index()
    {
        $data = [];
        return $this->render('/index/index.php', $data);
    }

    public function error()
    {
        return $this->render('/index/error.php');
    }
}
