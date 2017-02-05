<?php
/**
 * User: Maxime
 * Date: 05/02/2017
 */

namespace App\Model\Table;


use Cake\ORM\Table;
use Cake\ORM\RulesChecker;
use App\Model\Entity\Degree;

class DegreesTable extends Table
{
	public function initialize(array $config)
	{
		$this->table('degrees');
		$this->primaryKey('id');
		$this->entityClass(Degree::class);
	}

	public function buildRules(RulesChecker $rules)
	{
	}
}