<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Capsule\Manager as DB;
use App\Model\Permission;

class User extends Model
{
    public function permissions()
    {
        $permissions = DB::table('users')
            ->select('permissions.*')
            ->join('users_permissions', 'users.id', 'users_permissions.user_id')
            ->join('permissions', 'users_permissions.permission_id', 'permissions.id')
            ->where('users.id', '=', $this->id)
            ->get();
        foreach ($permissions as $index => $record) {
            $permissions[$index] = new \App\Model\Permission((array)$record);
        }
        return collect($permissions);
    }

    public function hasPermission($permissionName)
    {
        $result = $this->permissions()->first(function($value, $key) use ($permissionName) {
            return $value->name == $permissionName;
        });
        return ($result == null);
    }
}
