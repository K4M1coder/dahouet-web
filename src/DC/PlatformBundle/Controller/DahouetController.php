<?php

namespace DC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use DC\PlatformBundle\Entity\Challenge;
use DC\PlatformBundle\Entity\Regate;

class DahouetController extends Controller {
	public function indexAction() {
		
		// Notre liste d'annonce en dur
		$listSubjects = array (
				array (
						'title' => 'La baie en double',
						'id' => 1,
						'author' => 'Alexandre',
						'content' => 'Description: Le week end du 26 et 27 septembre prochain aura lieu la 3ème édition de la DUO D’ARMOR, régate imaginée conjointement par les Yacht Clubs de St Quay Portrieux SNSQP et du Val-André YCVA.
En baie de St Brieuc, la régate sur deux jours et en double, proposera sur 2 jours des parcours côtiers et/ou parcours banane, selon les conditions météo. Cette année, le départ sera lancé de Dahouët pour la 1ère manche avec une arrivée à St Quay le samedi soir où le dîner sera organisé. La seconde épreuve organisée autour des îles s’achèvera au SNSQP pour la remise des prix et la proclamation des résultats.
L’originalité de cette épreuve comptant pour le Trophée habitable CCI22 tient compte de la complémentarité des équipages en double et de la connaissance de leur bateau',
						'date' => new \Datetime () 
				),
				array (
						'title' => '80 miles de Dahouët',
						'id' => 2,
						'author' => 'Hugo',
						'content' => 'Description: « La » régate de l’été du YCVA est une institution. Depuis plus de 40 ans, elle se déroule en baie de St Brieuc et parfois juste devant la plage du Val-André, pour le plus grand bonheur des estivants. Ce rassemblement compte pour le Trophée Habitable CCI 22.
Départ et arrivée à Dahouët avec cette année, un dîner/BBQ qui se tiendra à l’issu de la remise des prix le Samedi soir.',
						'date' => new \Datetime () 
				),
				array (
						'title' => 'Régate de Notre Dame de la garde',
						'id' => 3,
						'author' => 'Mathieu',
						'content' => 'Description: encore une belle rencontre a venir',
						'date' => new \Datetime () 
				) 
		);
		
		// Et injecter notre liste
		return $this->render ( 'DCPlatformBundle:Dahouet:index.html.twig', array (
				'listsubjects' => $listSubjects 
		) );
	}
	public function viewAction($id) {
		$advert = array (
				'title' => '80 miles de Dahouët',
				'id' => $id,
				'author' => 'Hugo',
				'content' => 'Description: « La » régate de l’été du YCVA est une institution. Depuis plus de 40 ans, elle se déroule en baie de St Brieuc et parfois juste devant la plage du Val-André, pour le plus grand bonheur des estivants. Ce rassemblement compte pour le Trophée Habitable CCI 22.
Départ et arrivée à Dahouët avec cette année, un dîner/BBQ qui se tiendra à l’issu de la remise des prix le Samedi soir.',
				'date' => new \Datetime () 
		);
		
		return $this->render ( 'DCPlatformBundle:Dahouet:view.html.twig', array (
				'advert' => $advert 
		) );
	}
	public function regatesindexAction() {
		
		// Notre liste d'annonce en dur
		$listRegates = array (
				array (
						'title' => 'La baie en double',
						'id' => 1,
						'author' => 'Alexandre',
						'content' => '<p><strong>Description:</strong> Le week end du 26 et 27 septembre prochain aura lieu la 3ème édition de la DUO D’ARMOR, régate imaginée conjointement par les Yacht Clubs de St Quay Portrieux SNSQP et du Val-André YCVA.
En baie de St Brieuc, la régate sur deux jours et en double, proposera sur 2 jours des parcours côtiers et/ou parcours banane, selon les conditions météo. Cette année, le départ sera lancé de Dahouët pour la 1ère manche avec une arrivée à St Quay le samedi soir où le dîner sera organisé. La seconde épreuve organisée autour des îles s’achèvera au SNSQP pour la remise des prix et la proclamation des résultats.
L’originalité de cette épreuve comptant pour le Trophée habitable CCI22 tient compte de la complémentarité des équipages en double et de la connaissance de leur bateau</p>',
						'date' => new \Datetime () 
				),
				array (
						'title' => '80 miles de Dahouët',
						'id' => 2,
						'author' => 'Hugo',
						'content' => '<p><strong>Description:</strong> &laquo;&nbsp;La&nbsp;&raquo; régate
					de l&rsquo;été du club qui depuis plus de 40 ans se déroule en baie
					de St Brieuc et parfois juste devant la plage du Val-André par
					plusieurs parcours banane, pour le plus grand bonheur des
					estivants. Tout dépend de la direction et de la force du vent. Ce
					rassemblement compte pour le Trophée Habitable CCI 22.
					</p>
					<p>Départ et arrivée à Dahouët avec la veille, samedi soir, un
					dîner/BBQ. Remise des prix le dimanche soir autour d&rsquo;un
					verre.</p>',
						'date' => new \Datetime () 
				),
				array (
						'title' => 'Régate de Notre Dame de la garde',
						'id' => 3,
						'author' => 'Mathieu',
						'content' => '<p><strong>Description:</strong> encore une belle rencontre a venir.</p>',
						'date' => new \Datetime () 
				) 
		);
		
		// Et injecter notre liste
		return $this->render ( 'DCPlatformBundle:Dahouet/regates:index.html.twig', array (
				'listRegates' => $listRegates 
		) );
	}
	public function regatesviewAction($id) {
		$regate = array (
				'title' => '80 miles de Dahouët',
				'id' => $id,
				'author' => 'Hugo',
				'content' => '<p><strong>Description:</strong> &laquo;&nbsp;La&nbsp;&raquo; régate
					de l&rsquo;été du club qui depuis plus de 40 ans se déroule en baie
					de St Brieuc et parfois juste devant la plage du Val-André par
					plusieurs parcours banane, pour le plus grand bonheur des
					estivants. Tout dépend de la direction et de la force du vent. Ce
					rassemblement compte pour le Trophée Habitable CCI 22.
					</p>
					<p>Départ et arrivée à Dahouët avec la veille, samedi soir, un
					dîner/BBQ. Remise des prix le dimanche soir autour d&rsquo;un
					verre.</p>',
				'date' => new \Datetime () 
		);
		
		return $this->render ( 'DCPlatformBundle:Dahouet/regates:view.html.twig', array (
				'regate' => $regate 
		) );
	}
	public function navbarAction() {
		$request = $this->container->get ( 'request' );
		$routeName = $request->get ( 'route' );
		
		switch ($routeName) {
			case dc_platform_dahouet_regates_inscription :
				break;
			default :
				return $this->render ( 'DCPlatformBundle:Dahouet:navbar.html.twig' );
				break;
		}
	}
	public function regatesinscriptionAction(Request $request) {
		$request = $this->container->get ( 'request' );
		$routeName = $request->get ( 'route' );
		$return = null;
		// On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
		if (! $this->get ( 'security.context' )->isGranted ( 'ROLE_OWNER' )) {
			// Sinon on déclenche une exception « Accès interdit »
			throw new AccessDeniedException ( 'Accès limité aux porprietaires.' );
		}
		
		// Ici l'utilisateur a les droits suffisant,
		// on faire l'inscription à une regate
		// return $this->forward('DCPlatformBundle:Dahouet:index'); // sa c'est si je veu faire une redirection.
		$session = $this->getRequest ()->getSession ();
		$id = $session->get ( 'user' );
		$session->remove ( 'regate' );
		$challenge = new Challenge ();
		$regate = new Regate ();
		$repository = $this->getDoctrine ()->getManager ()->getRepository ( 'DCPlatformBundle:Challenge' );
		
		$curchal = $repository->findByCurrentDate ();
		$challenge = $curchal [0];
		$session->set ( 'challenge', $challenge );
		$libel = $challenge->getChallenge ();
		
		$form = $this->createFormBuilder ()->add ( 'regate', 'entity', array (
				'label' => 'Régate',
				'class' => 'DCPlatformBundle:Regate',
				'choice_label' => 'libreg',
				'query_builder' => function (\DC\PlatformBundle\Entity\RegateRepository $er) {
					return $er->getRegate ();
				} 
		) )->add ( 'Valider inscription', 'submit' )->getForm ();
		
		$form->handleRequest ( $request );
		$chooseReg = $form->getData ();
		
		$regate = $chooseReg ['regate'];
		if ($form->isSubmitted ()) {
			$session->set ( 'regate', $regate );
			$url = $this->generateUrl ( 'dc_platform_dahouet_regates_inscription_voilier' );
			return $this->redirect ( $url );
		}
		return $this->render ( 'DCPlatformBundle:Dahouet/regates:view.html.twig', array (
				'form' => $form->createView (),
				"libel" => $libel 
		) );
	}
	public function regatesinscriptionvoilierAction(Request $request) {
		$challenge = new Challenge ();
		$regate = new Regate ();
		$session = $this->getRequest ()->getSession ();
		$id = $session->get ( 'id' );
		$challenge = $session->get ( 'challenge' );
		$regate = $session->get ( 'regate' );
		$libelChal = $challenge->getChallenge ();
		$libelReg = $regate->getLibreg ();
		
		$form = $this->createFormBuilder ()->add ( 'voilier', 'entity', array (
				'label' => 'Voilier',
				'class' => 'DCPlatformBundle:Voilier',
				'choice_label' => 'nomvoil',
				'query_builder' => function (\DC\PlatformBundle\Entity\VoilierRepository $er) use($id) {
					return $er->getVoilier ( $id );
				} 
		) )->add ( 'Valider', 'submit' )->getForm ();
		$form->handleRequest ( $request );
		$chooseVoil = $form->getData ();
		
		return $this->render ( 'DL2015IndexBundle::voilier.html.twig', array (
				"libelchal" => $libelChal,
				"libelreg" => $libelReg 
		) );
	}
}