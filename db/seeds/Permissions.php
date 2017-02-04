<?php

use Phinx\Seed\AbstractSeed;

class Permissions extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'name' => 'test1',
                'description' => 'Test Permission #1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'test2',
                'description' => 'Test Permission #2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];

        $users = $this->table('permissions');
        $users->insert($data)
              ->save();
    }
}
