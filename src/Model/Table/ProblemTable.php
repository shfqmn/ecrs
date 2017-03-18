<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use DateTime;

/**
 * Problem Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Report
 *
 * @method \App\Model\Entity\Problem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Problem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Problem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Problem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Problem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Problem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Problem findOrCreate($search, callable $callback = null, $options = [])
 */
class ProblemTable extends Table
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

        $this->setTable('problem');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Report', [
            'foreignKey' => 'report_id',
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('details', 'create')
            ->notEmpty('details');

        $validator
            ->requirePresence('datetime', 'create')
            ->notEmpty('datetime');

        $validator
            ->requirePresence('action', 'create')
            ->notEmpty('action');

        $validator
            ->requirePresence('notes', 'create')
            ->notEmpty('notes');

        $validator
            ->requirePresence('venue', 'create')
            ->notEmpty('venue');

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
        $rules->add($rules->existsIn(['report_id'], 'Report'));

        return $rules;
    }
}
