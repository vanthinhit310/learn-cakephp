<?php

declare(strict_types=1);

use Phinx\Util\Literal;
use Migrations\AbstractMigration;

class EmailConfirmations extends AbstractMigration
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
        $table = $this->table('verifications');
        $table
            ->addColumn('email', 'string')
            ->addColumn('verify_token', 'string')
            ->addColumn('created', 'datetime', [
                'default' => null,
                'null'    => false,
            ])
            ->create();
    }
}
