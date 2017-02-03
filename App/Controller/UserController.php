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

    public function login()
    {
        $data = [];
        $this->render('/user/login.php', $data);
    }
    public function loginSubmit()
    {
        $data = [];
        $username = $this->request->getParam('username');
        $password = $this->request->getParam('password');

        // Find the user
        $user = User::where(['username', '=', $username])->get();
        if ($user !== false && password_verify($password, $user->password) === true) {
            $this->session->set('user', $user);
            return $this->response->withRedirect('/');
        }

        $this->message->error('Login failure');

        $this->render('/user/login.php', $data);
    }

    public function reset()
    {
        $data = [];
        $this->render('/user/reset.php', $data);
    }
    public function resetSubmit()
    {
        $data = [];
        $username = $this->request->getParam('username');

        // Find the user by username or email address
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $where = ['email', '=', $username];
        } else {
            $where = ['username', '=', $username];
        }
        $user = User::where($where);
        if ($user !== false) {
            // Make our new hash to send to the user
            $hash = hash('sha512', random_bytes(64));

            $user->reset_hash = $hash;
            $user->reset_hash_timeout = date('Y-m-d H:i:s', strtotime('+1 hour'));
            $user->save();

            $this->message->success('Please check your email for a message with additional instructions.');
        }

        $this->message->error('Error resetting password');

        $this->render('/user/reset.php', $data);
    }
}
