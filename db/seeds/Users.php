<?php

use Phinx\Seed\AbstractSeed;

class Users extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'username' => 'user1',
                'password' => password_hash('test1234', PASSWORD_DEFAULT),
                'email' => 'user1@phpdeveloper.org',
                'name' => 'User One',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'username' => 'user2',
                'password' => password_hash('test1234', PASSWORD_DEFAULT),
                'email' => 'user2@phpdeveloper.org',
                'name' => 'User Two',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];

        $users = $this->table('users');
        $users->insert($data)
              ->save();
    }
}
