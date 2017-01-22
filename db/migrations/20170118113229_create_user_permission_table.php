<?php

use Phinx\Migration\AbstractMigration;

class CreateUserPermissionTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('users_permissions');
        $table->addColumn('user_id', 'string')
            ->addColumn('permission_id', 'string')
            ->addColumn('created_at', 'datetime')
            ->addcolumn('updated_at', 'datetime')
            ->create();
    }
}
