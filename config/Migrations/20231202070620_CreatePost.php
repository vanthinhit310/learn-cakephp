<?php

declare(strict_types=1);

use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CreatePost extends AbstractMigration
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
        $table = $this->table('posts');
        $table
            ->addColumn('name', 'string', [
                'limit' => 100,
            ])
            ->addColumn('user_id', 'integer')
            ->addForeignKey('user_id', 'users', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->addColumn('description', 'string', [
                'limit' => 255,
            ])
            ->addColumn('image', 'string', [
                'limit' => 255,
            ])
            ->addColumn('category_id', 'integer', [
                'null' => true,
            ])
            ->addForeignKey('category_id', 'categories', 'id', ['delete' => 'SET_NULL', 'update' => 'NO_ACTION'])
            ->addColumn('content', 'text', [
                'limit' => MysqlAdapter::TEXT_LONG,
            ])
            ->addColumn('tags', 'text', [
                'limit' => MysqlAdapter::TEXT_SMALL,
                'null'  => true,
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
