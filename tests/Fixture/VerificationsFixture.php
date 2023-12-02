<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VerificationsFixture
 */
class VerificationsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'verify_token' => 'Lorem ipsum dolor sit amet',
                'created' => 1701545868,
            ],
        ];
        parent::init();
    }
}
