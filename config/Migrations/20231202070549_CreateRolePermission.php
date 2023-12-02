<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateRolePermission extends AbstractMigration
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
        $table = $this->table('role_permissions', ['id' => false, 'primary_key' => ['role_id', 'permission_id']]);
        $table->addColumn('role_id', 'integer')
            ->addColumn('permission_id', 'integer')
            ->addColumn('created', 'datetime')
            ->create();
    }
}
