<?php
/**
 * User: Maxime
 * Date: 14/01/2017
 */

namespace App\Controller;

use Carbon\Carbon;

class HomeController extends AppController
{

	public function index()
	{
		$age = Carbon::createFromDate(1994, 5, 13)->age;

		$this->set('age', $age);
	}
}