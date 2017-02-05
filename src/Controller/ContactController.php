<?php
/**
 * User: Maxime
 * Date: 15/12/2016
 */

namespace App\Controller;

use App\Form\ContactForm;

class ContactController extends AppController
{
	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('Security');
		$this->loadComponent('Csrf');
	}

	public function index()
	{
		$contact = new ContactForm();

		if($this->request->is('post')) {
			if(!empty($this->request->data['website'])){
				$this->Flash->success('Votre message a bien été envoyé, je reviendrais vers vous dès que possible.');
				$this->request->data = [];
			}
			else{
				if($contact->execute($this->request->data)) {
					$this->Flash->success('Votre message a bien été envoyé, je reviendrais vers vous dès que possible.');
					$this->request->data = [];
				} else {
					$this->Flash->error('Il y a eu un problème lors de la soumission de votre mail.');
				}
			}
		}

		$this->set('contact', $contact);
	}
}