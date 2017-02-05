<?php
/**
 * User: Maxime
 * Date: 15/12/2016
 */

namespace App\Model\Entity;


use Cake\ORM\Entity;

class Skill extends Entity
{
	/**
	 * Fields that can be mass assigned using newEntity() or patchEntity().
	 *
	 * @var array
	 */
	protected $_accessible = [
		'id' => true,
		'libelle' => true,
		'logo' => true,
		'progress' => true,
		'ordre' => true,
	];
}