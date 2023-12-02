<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUser extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users');
        $table
            ->addColumn('username', 'string', ['limit' => 30])
            ->addColumn('password', 'string', ['limit' => 60])
            ->addColumn('role_id', 'integer', ['null' => true])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('verified_at', 'datetime', ['null' => true])
            ->addColumn('first_name', 'string', ['limit' => 30])
            ->addColumn('last_name', 'string', ['limit' => 30])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true])
            ->addIndex(['username', 'email'], ['unique' => true])
            ->addForeignKey('role_id', 'roles', 'id', ['delete' => 'SET_NULL', 'update' => 'NO_ACTION']);
        $table->create();
    }
}
