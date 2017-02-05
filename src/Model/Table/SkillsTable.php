<?php
/**
 * User: Maxime
 * Date: 15/12/2016
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\RulesChecker;
use App\Model\Entity\Skill;

class SkillsTable extends Table
{

	public function initialize(array $config)
	{
		$this->table('skills');
		$this->primaryKey('id');
		$this->entityClass(Skill::class);
	}

	public function buildRules(RulesChecker $rules)
	{
	}
}