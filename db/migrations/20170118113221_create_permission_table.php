<?php

use Phinx\Migration\AbstractMigration;

class CreatePermissionTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('permissions');
        $table->addColumn('name', 'string')
            ->addColumn('description', 'string')
            ->addColumn('created_at', 'datetime')
            ->addcolumn('updated_at', 'datetime')
            ->create();
    }
}
