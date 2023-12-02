<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateCategory extends AbstractMigration
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
        $table = $this->table('categories');
        $table
            ->addColumn('name', 'string', [
                'limit' => 60,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'null'    => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'null'    => false,
            ]);
        $table->create();
    }
}
