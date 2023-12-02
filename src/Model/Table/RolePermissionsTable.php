<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RolePermissions Model
 *
 * @property \App\Model\Table\RolesTable&\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\PermissionsTable&\Cake\ORM\Association\BelongsTo $Permissions
 *
 * @method \App\Model\Entity\RolePermission newEmptyEntity()
 * @method \App\Model\Entity\RolePermission newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\RolePermission> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RolePermission get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\RolePermission findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\RolePermission patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\RolePermission> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\RolePermission|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\RolePermission saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\RolePermission>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RolePermission>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RolePermission>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RolePermission> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RolePermission>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RolePermission>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\RolePermission>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\RolePermission> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RolePermissionsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('role_permissions');
        $this->setDisplayField(['role_id', 'permission_id']);
        $this->setPrimaryKey(['role_id', 'permission_id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Permissions', [
            'foreignKey' => 'permission_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('role_id', 'Roles'), ['errorField' => 'role_id']);
        $rules->add($rules->existsIn('permission_id', 'Permissions'), ['errorField' => 'permission_id']);

        return $rules;
    }
}
