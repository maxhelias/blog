<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contact;
use AppBundle\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Carbon\Carbon;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        $age = Carbon::createFromDate(1994, 5, 13)->age;

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'age' => $age
        ]);
    }

    /**
     * @Route("/skill", name="skill")
     */
    public function skillAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $skillRepository = $em->getRepository('AppBundle:Skill');
        $skills = $skillRepository->findBy([], ['ordre' => 'ASC']);

        return $this->render('AppBundle::skill.html.twig', [
            'skills' => $skills
        ]);
    }

    /**
     * @Route("/experience", name="experience")
     */
    public function experienceAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $experienceRepository = $em->getRepository('AppBundle:Experience');
        $experiences = $experienceRepository->findBy([], ['ordre' => 'DESC']);

        return $this->render('AppBundle::experience.html.twig', [
            'experiences' => $experiences
        ]);
    }

    /**
     * @Route("/degree", name="degree")
     */
    public function degreeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $degreeRepository = $em->getRepository('AppBundle:Degree');
        $degrees = $degreeRepository->findBy([], ['ordre' => 'DESC']);

        return $this->render('AppBundle::degree.html.twig', [
            'degrees' => $degrees
        ]);
    }

    /**
     * @Route("/project", name="project")
     */
    public function projectAction(Request $request)
    {
        return $this->render('AppBundle::project.html.twig');
    }

    /**
     * @Route("/hobbies", name="hobbies")
     */
    public function hobbiesAction(Request $request)
    {
        return $this->render('AppBundle::hobbies.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject($request->request->get('subject'))
                    ->setFrom([$request->request->get('email') => $request->request->get('author')])
                    ->setTo('maximehelias16@gmail.com')
                    ->setBody($request->request->get('body'));

                if ($this->get('mailer')->send($message) != 0) {
                    $this->get('session')->getFlashBag()->add('notice-mail', 'Votre message a bien été envoyé, je reviendrais vers vous dès que possible.');
                    $this->get('session')->getFlashBag()->add('color-mail', 'green');
                    $this->get('session')->getFlashBag()->add('status-mail', 'success');

                    return $this->redirectToRoute('contact');
                }
            }

            $this->get('session')->getFlashBag()->add('notice-mail', 'Il y a eu un problème lors de la soumission de votre mail.');
            $this->get('session')->getFlashBag()->add('color-mail', 're');
            $this->get('session')->getFlashBag()->add('status-mail', 'error');
        }

        return $this->render('AppBundle::contact.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
