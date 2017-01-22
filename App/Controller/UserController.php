<?php

namespace App\Controller;
use App\Model\User;

class UserController extends \App\Controller\BaseController
{
    public function index()
    {
        $data = [
            'users' => User::all()
        ];
        return $this->render('/user/index.php', $data);
    }

    public function view($request, $response, $args)
    {
        $data = [
            'user' => User::find($args['id'])
        ];
        return $this->render('/user/view.php', $data);
    }
}
