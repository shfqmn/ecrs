<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use DateTime;

/**
 * Sick Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Report
 *
 * @method \App\Model\Entity\Sick get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sick newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sick[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sick|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sick patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sick[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sick findOrCreate($search, callable $callback = null, $options = [])
 */
class SickTable extends Table
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

        $this->setTable('sick');
        $this->setDisplayField('name');
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
            ->requirePresence('datetime', 'create')
            ->notEmpty('datetime');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('courseCode', 'create')
            ->notEmpty('courseCode');

        $validator
            ->requirePresence('ic', 'create')
            ->notEmpty('ic');

        $validator
            ->requirePresence('tel', 'create')
            ->notEmpty('tel');

        $validator
            ->requirePresence('studentNo', 'create')
            ->notEmpty('studentNo');

        $validator
            ->requirePresence('notes', 'create')
            ->notEmpty('notes');

        $validator
            ->requirePresence('homeAddress', 'create')
            ->notEmpty('homeAddress');

        $validator
            ->requirePresence('collegeAddress', 'create')
            ->notEmpty('collegeAddress');

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
