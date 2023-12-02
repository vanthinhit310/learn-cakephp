<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RolePermissionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RolePermissionsTable Test Case
 */
class RolePermissionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RolePermissionsTable
     */
    protected $RolePermissions;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.RolePermissions',
        'app.Roles',
        'app.Permissions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RolePermissions') ? [] : ['className' => RolePermissionsTable::class];
        $this->RolePermissions = $this->getTableLocator()->get('RolePermissions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RolePermissions);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RolePermissionsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
