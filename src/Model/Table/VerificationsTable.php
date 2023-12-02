<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Verifications Model
 *
 * @method \App\Model\Entity\Verification newEmptyEntity()
 * @method \App\Model\Entity\Verification newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Verification> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Verification get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Verification findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Verification patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Verification> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Verification|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Verification saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Verification>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Verification>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Verification>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Verification> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Verification>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Verification>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Verification>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Verification> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VerificationsTable extends Table
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

        $this->setTable('verifications');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('verify_token')
            ->maxLength('verify_token', 255)
            ->allowEmptyString('verify_token');

        return $validator;
    }
}
