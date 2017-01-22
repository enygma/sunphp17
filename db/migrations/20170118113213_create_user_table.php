<?php

use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('username', 'string')
            ->addColumn('password', 'string')
            ->addColumn('email', 'string')
            ->addColumn('name', 'text')
            ->addColumn('reset_hash', 'string', ['null' => true])
            ->addColumn('reset_hash_timeout', 'string', ['null' => true])
            ->addColumn('created_at', 'datetime')
            ->addcolumn('updated_at', 'datetime')
            ->create();
    }
}
