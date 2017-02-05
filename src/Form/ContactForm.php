<?php
/**
 * User: Maxime
 * Date: 12/01/2017
 */

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Mailer\Email;
use Cake\Validation\Validator;
use Exception;

class ContactForm extends Form
{

	protected function _buildSchema(Schema $schema)
	{
		return $schema->addField('author', 'string')
			->addField('email', ['type' => 'string'])
			->addField('subject', ['type' => 'string'])
			->addField('body', ['type' => 'text']);
	}

	protected function _buildValidator(Validator $validator)
	{
		return $validator->add('author', 'length', [
				'rule' => ['minLength', 1],
				'message' => 'Un nom est requis'
			])->add('email', 'format', [
				'rule' => 'email',
				'message' => 'Une adresse email valide est requise'
			])->add('subject', 'length', [
				'rule' => ['minLength', 1],
				'message' => 'Un sujet est requis'
			])->add('body', 'length', [
				'rule' => ['minLength', 1],
				'message' => 'Veuillez renseigner un message'
			]);
	}

	protected function _execute(array $data)
	{
		try{
			$email = new Email();
			$email->profile('default');

			$email->from([$data['email'] => $data['author']])
				->to('maximehelias16@gmail.com')
				->subject($data['subject'])
				->send($data['body']);

			return true;
		}
		catch(Exception $e){
			echo $e->getMessage();
			return false;
		}
	}
}