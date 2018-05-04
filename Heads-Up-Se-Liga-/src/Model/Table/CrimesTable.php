<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Crimes Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Crime get($primaryKey, $options = [])
 * @method \App\Model\Entity\Crime newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Crime[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Crime|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Crime patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Crime[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Crime findOrCreate($search, callable $callback = null, $options = [])
 */
class CrimesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('crimes');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 20)
            ->allowEmpty('title');

        $validator
            ->date('date')
            ->allowEmpty('date');

        $validator
            ->scalar('schedule')
            ->maxLength('schedule', 4)
            ->allowEmpty('schedule');

        $validator
            ->scalar('type')
            ->maxLength('type', 30)
            ->allowEmpty('type');

        $validator
            ->scalar('description')
            ->maxLength('description', 350)
            ->allowEmpty('description');

        $validator
            ->scalar('stolen_objects')
            ->maxLength('stolen_objects', 100)
            ->allowEmpty('stolen_objects');

        $validator
            ->scalar('local')
            ->maxLength('local', 50)
            ->allowEmpty('local');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
