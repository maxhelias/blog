<?php
/**
 * User: Maxime
 * Date: 15/12/2016
 */

namespace App\Controller;

use Cake\ORM\TableRegistry;


class SkillController extends AppController
{

	public function index()
	{
		$skills = TableRegistry::get('Skills');
		$result = $skills->find('all')->orderAsc('Skills__ordre');

		$this->set('skills', $result);
	}
}