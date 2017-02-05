<?php
/**
 * User: Maxime
 * Date: 05/02/2017
 */

namespace App\Model\Entity;


use Cake\ORM\Entity;

class Degree extends Entity
{
	/**
	 * Fields that can be mass assigned using newEntity() or patchEntity().
	 *
	 * @var array
	 */
	protected $_accessible = [
		'id' => true,
		'libelle' => true,
		'place' => true,
		'date' => true,
		'description' => true,
		'ordre' => true,
	];
}