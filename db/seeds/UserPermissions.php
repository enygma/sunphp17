<?php

use Phinx\Seed\AbstractSeed;

class UserPermissions extends AbstractSeed
{
    public function run()
    {
        $users = $this->fetchAll('SELECT * FROM users');
        $permissions = $this->fetchAll('SELECT * FROM permissions');
        $userPermsTable = $this->table('users_permissions');

        // Give both users the "test1" permissions
        $test1Id = $this->findPermissionId('test1', $permissions);
        foreach ($users as $user) {
            $data = [
                'user_id' => $user['id'],
                'permission_id' => $test1Id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
            $userPermsTable->insert($data)->save();
        }

        // Only give the second user the "test2" permission
        $user2Id = $this->findUserId('user2', $users);
        $data = [
            'user_id' => $user2Id,
            'permission_id' => $this->findPermissionId('test2', $permissions),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $userPermsTable->insert($data)->save();
    }

    public function findPermissionId($name, $data)
    {
        foreach ($data as $d) {
            if ($d['name'] == $name) {
                return $d['id'];
            }
        }
        return false;
    }
    public function findUserId($username, $data)
    {
        foreach ($data as $d) {
            if ($d['username'] == $username) {
                return $d['id'];
            }
        }
        return false;
    }
}
