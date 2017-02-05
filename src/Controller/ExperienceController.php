<?php
/**
 * User: Maxime
 * Date: 15/12/2016
 */

namespace App\Controller;

use Cake\ORM\TableRegistry;


class ExperienceController extends AppController
{

	public function index()
	{
		$experiences = TableRegistry::get('Experiences');
		$result = $experiences->find('all')->orderDesc('Experiences__ordre');

		$this->set('experiences', $result);
	}
}