<?php
/**
 * User: Maxime
 * Date: 15/12/2016
 */

namespace App\Controller;


use Cake\ORM\TableRegistry;

class DegreeController extends AppController
{

	public function index()
	{
		$degrees = TableRegistry::get('Degrees');
		$result = $degrees->find('all')->orderDesc('Degrees__ordre');

		$this->set('degrees', $result);
	}
}