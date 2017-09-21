<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Entry Model
 *
 * @method \App\Model\Entity\Entry get($primaryKey, $options = [])
 * @method \App\Model\Entity\Entry newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Entry[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Entry|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Entry patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Entry[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Entry findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EntryTable extends Table
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

        $this->setTable('entry');
        $this->setDisplayField('callsign');
        $this->setPrimaryKey('callsign');

        $this->addBehavior('Timestamp');
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
            ->scalar('callsign')
            ->allowEmpty('callsign', 'create');

        $validator
            ->scalar('mode')
            ->requirePresence('mode', 'create')
            ->notEmpty('mode');

        $validator
            ->scalar('category')
            ->requirePresence('category', 'create')
            ->notEmpty('category');

        $validator
            ->scalar('prefix')
            ->requirePresence('prefix', 'create')
            ->notEmpty('prefix');

        $validator
            ->scalar('log_type')
            ->requirePresence('log_type', 'create')
            ->notEmpty('log_type');

        $validator
            ->scalar('file_format')
            ->requirePresence('file_format', 'create')
            ->notEmpty('file_format');

        $validator
            ->scalar('dok')
            ->requirePresence('dok', 'create')
            ->notEmpty('dok');

        $validator
            ->scalar('club')
            ->requirePresence('club', 'create')
            ->notEmpty('club');

        $validator
            ->boolean('disqual')
            ->requirePresence('disqual', 'create')
            ->notEmpty('disqual');

        $validator
            ->integer('c_qso')
            ->requirePresence('c_qso', 'create')
            ->notEmpty('c_qso');

        $validator
            ->integer('c_qtc')
            ->requirePresence('c_qtc', 'create')
            ->notEmpty('c_qtc');

        $validator
            ->integer('c_mult')
            ->requirePresence('c_mult', 'create')
            ->notEmpty('c_mult');

        $validator
            ->integer('c_mult2')
            ->requirePresence('c_mult2', 'create')
            ->notEmpty('c_mult2');

        $validator
            ->integer('c_score')
            ->requirePresence('c_score', 'create')
            ->notEmpty('c_score');

        $validator
            ->integer('r_qso')
            ->requirePresence('r_qso', 'create')
            ->notEmpty('r_qso');

        $validator
            ->integer('r_qtc')
            ->requirePresence('r_qtc', 'create')
            ->notEmpty('r_qtc');

        $validator
            ->integer('r_mult')
            ->requirePresence('r_mult', 'create')
            ->notEmpty('r_mult');

        $validator
            ->integer('r_mult2')
            ->requirePresence('r_mult2', 'create')
            ->notEmpty('r_mult2');

        $validator
            ->integer('r_score')
            ->requirePresence('r_score', 'create')
            ->notEmpty('r_score');

        $validator
            ->integer('f_qso')
            ->requirePresence('f_qso', 'create')
            ->notEmpty('f_qso');

        $validator
            ->integer('f_qtc')
            ->requirePresence('f_qtc', 'create')
            ->notEmpty('f_qtc');

        $validator
            ->integer('f_mult')
            ->requirePresence('f_mult', 'create')
            ->notEmpty('f_mult');

        $validator
            ->integer('f_mult2')
            ->requirePresence('f_mult2', 'create')
            ->notEmpty('f_mult2');

        $validator
            ->integer('f_score')
            ->requirePresence('f_score', 'create')
            ->notEmpty('f_score');

        $validator
            ->decimal('optime')
            ->requirePresence('optime', 'create')
            ->notEmpty('optime');

        $validator
            ->scalar('op_list')
            ->requirePresence('op_list', 'create')
            ->notEmpty('op_list');

        $validator
            ->scalar('soapbox')
            ->requirePresence('soapbox', 'create')
            ->notEmpty('soapbox');

        $validator
            ->scalar('version_string')
            ->requirePresence('version_string', 'create')
            ->notEmpty('version_string');

        $validator
            ->boolean('prblm')
            ->requirePresence('prblm', 'create')
            ->notEmpty('prblm');

        $validator
            ->scalar('log_checker')
            ->requirePresence('log_checker', 'create')
            ->notEmpty('log_checker');

        $validator
            ->scalar('rmx')
            ->requirePresence('rmx', 'create')
            ->notEmpty('rmx');

        $validator
            ->boolean('award')
            ->requirePresence('award', 'create')
            ->notEmpty('award');

        $validator
            ->boolean('plaque')
            ->requirePresence('plaque', 'create')
            ->notEmpty('plaque');

        $validator
            ->boolean('packet')
            ->requirePresence('packet', 'create')
            ->notEmpty('packet');

        $validator
            ->scalar('commands')
            ->requirePresence('commands', 'create')
            ->notEmpty('commands');

        $validator
            ->boolean('stf')
            ->requirePresence('stf', 'create')
            ->notEmpty('stf');

        $validator
            ->boolean('problem')
            ->requirePresence('problem', 'create')
            ->notEmpty('problem');

        $validator
            ->boolean('frage')
            ->requirePresence('frage', 'create')
            ->notEmpty('frage');

        $validator
            ->boolean('kommentar')
            ->requirePresence('kommentar', 'create')
            ->notEmpty('kommentar');

        $validator
            ->boolean('antwort')
            ->requirePresence('antwort', 'create')
            ->notEmpty('antwort');

        $validator
            ->boolean('stop')
            ->requirePresence('stop', 'create')
            ->notEmpty('stop');

        return $validator;
    }
}
