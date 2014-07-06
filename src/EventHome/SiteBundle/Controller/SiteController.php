<?php

namespace EventHome\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBundle:Site:index.html.twig');
    }
    
    public function forfaitsAction()
    {
		return $this->render('SiteBundle:Site:forfaits.html.twig');
    }
    
    public function situerAction()
    {
		return $this->render('SiteBundle:Site:situer.html.twig');
    }
	
	public function navAction()
	{
		return $this->render('SiteBundle:Site:nav.html.twig');
	}
	
	public function evaluAction()
	{
		$form = $this->createFormBuilder()
					 ->setAction($this->generateUrl('site_toPdf'))
            		 ->add('invites', 'choice', array('label'	 => 'Nombre d\'invités de prévu : ',
            		 								   'attr'	 => array('class' => 'selecteurs'),
            		 								   'choices' => array( '0' => '10 personnes',
	            		 												   '20' => '20 personnes',
	            		 												   '50' => '50 personnes',
	            		 												   '100' => '100 personnes',
	            		 												   '200' => '200 personnes ',
	            		 												   '200+' => '200 personnes et +',)))
	            		 												   
	            	 ->add('acc_elle', 'choice', array('label' 	 => 'Robe, bijoux et accessoires pour la marié : ',
	            	 								   'attr'	 => array('class' => 'selecteurs'),
	            	 								   'choices' => array( '0' => 'Non, merci',
	            		 												   '500' => '500€',
	            		 												   '1.000' => '1000€',
	            		 												   '3000' => '2000€',
	            		 												   '3000' => '3000€',
	            		 												   '5000' => '5000€',
	            		 												   '10.000' => '10000€')))
					->add('acc_lui', 'choice', array('label' 	 => 'Costume et accessoires pour le marié : ',
	            	 								   'attr'	 => array('class' => 'selecteurs'),
	            	 								   'choices' => array( '0' => 'Non, merci',
	            		 												   '500' => '500€',
	            		 												   '1000' => '1000€',
	            		 												   '2000' => '2000€',
	            		 												   '3000' => '3000€',
	            		 												   '5000' => '5000€',
	            		 												   '10000' => '10000€')))
					 ->add('acc_enf', 'choice', array('label' 	 => 'Costume et accessoires pour les enfants : ',
	            	 								   'attr'	 => array('class' => 'selecteurs'),
	            	 								   'choices' => array( '0' => 'Non, merci',
	            		 												   '500' => '500€',
	            		 												   '1000' => '1000€',
	            		 												   '2000' => '2000€',
	            		 												   '3000' => '3000€',
	            		 												   '5000' => '5000€',
	            		 												   '10000' => '10000€')))
					 ->add('traiteur', 'choice', array('label'	 => 'Traiteur, restauration diverse : ',
            		 								   'attr'	 => array('class' => 'selecteurs'),
            		 								   'choices' => array( '0' => 'Non, merci',
	            		 												   '3000' => '3000€',
	            		 												   '5000' => '5000€',
	            		 												   '8000' => '8000€',
	            		 												   '10000' => '10000€')))
					 ->add('fleurs', 'choice', array('label'	 => 'Fleuriste : ',
            		 								 'attr'	     => array('class' => 'selecteurs'),
            		 								 'choices'   => array( '0' => 'Non, merci',
	            		 												   '100' => '100€',
	            		 												   '300' => '300€',
	            		 												   '500' => '500€',
	            		 												   '1000' => '1000€')))
					 ->add('deco', 'choice', array('label'	 => 'Nous voulons décorer le lieu ou les vehicules : ',
            		 								 'attr'	     => array('class' => 'selecteurs'),
            		 								 'choices'   => array( '0' => 'Non, merci',
	            		 												   '100' => '100€',
	            		 												   '300' => '300€',
	            		 												   '500' => '500€',
	            		 												   '1000' => '1000€')))
					 ->add('photo', 'choice', array('label'	 => 'Un photographe professionnel : ',
            		 								 'attr'	     => array('class' => 'selecteurs'),
            		 								 'choices'   => array( '0' => 'Non, merci',
	            		 												   '100' => '100€',
	            		 												   '300' => '300€',
	            		 												   '500' => '500€',
	            		 												   '1000' => '1000€')))
					 ->add('dj', 'choice', array('label'	 => 'Un D.J. ou un orchestre animera notre soirée : ',
            		 								 'attr'	     => array('class' => 'selecteurs'),
            		 								 'choices'   => array( '0' => 'Non, merci',
	            		 												   '100' => '100€',
	            		 												   '300' => '300€',
	            		 												   '500' => '500€',
	            		 												   '1000' => '1000€')))
					->add('nom', 'text', array('label' => 'Votre nom :', 
											  'attr'  => array('class' => 'ident', 
																'placeholder' => 'Nom de famille')))
					->add('prenom', 'text', array('label' => 'Votre prénom :', 
												  'attr'  => array('class' => 'ident', 
																  'placeholder' => 'Prénom')))
					->add('email', 'email', array('label' => 'Votre adresse email :', 
												 'attr'  => array('class' => 'ident',
												 				  'placeholder' => 'Email@valid.fr')))
					->add('phone', 'text', array('label' => 'Votre numéro de téléphone :', 
												 'attr'  => array('class' => 'ident', 
																  'placeholder' => '0616071975')))
					->add('adress', 'text', array('label' => 'Votre adresse :', 
												 'attr'  => array('class' => 'ident', 
																  'placeholder' => 'Votre adresse')))
					->add('ville', 'text', array('label' => 'Ville :', 
												 'attr'  => array('class' => 'ident', 
																  'placeholder' => 'Ville')))
																  
					 ->getForm();
		             
	    return $this->render('SiteBundle:Site:evaluation.html.twig', array('form' => $form->createView()));
	}
	
	public function toPdfAction(Request $request)
	{
		// On récupére tout le contenu de post dans des variables
		$post     = $request->request->get('form'); 
		
		$acc_elle = $post['acc_elle'];
		$acc_lui  = $post['acc_lui'];
		$acc_enf  = $post['acc_enf'];
		$deco     = $post['deco'];
		$dj       = $post['dj'];
		$traiteur = $post['traiteur'];
		$photo    = $post['photo'];
		$fleurs   = $post['fleurs'];
		$nom      = $post['nom'];
		$prenom   = $post['prenom'];
		$adress   = $post['adress'];
		$ville    = $post['ville'];
		$phone    = $post['phone'];
		$email    = $post['email'];
		$total 	  = $acc_elle+$acc_lui+$acc_enf+$deco+$dj+$fleurs+$traiteur+$photo; //Compte le budget total
		
		$message = \Swift_Message::newInstance()
	                    ->setContentType('text/html')
	                    ->setSubject('Budget Mariage de Mr/Mme '.$nom.'')
	                    ->setFrom('gaucks@gmail.com')
	                    ->setTo('gaucks@gmail.com')
	                    ->setBody('Le budget total est de '.$total.', prendre le PDF en piece jointe.');
	
		$this->get('mailer')->send($message);
		
		//on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
		$html = $this->render('SiteBundle:Site:PDF.html.twig', array('name'		   => 'EventHome',
																	 'elle'        => $acc_elle,
																	 'lui'         => $acc_lui,
																	 'enf'         => $acc_enf,
																	 'deco'        => $deco,
																	 'dj'          => $dj,
																	 'traiteur'    => $traiteur,
																	 'photo'       => $photo,
																	 'fleur'       => $fleurs,
																	 'nom'         => $nom,
																	 'prenom'      => $prenom,
																	 'adress'      => $adress,
																	 'ville'       => $ville,
																	 'phone'       => $phone,
																	 'email'       => $email,
																	 'total'	   => $total
																	 ));
		
		//on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...
		$html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr',true,'UTF-8',array(20, 10, 10, 30));
		$html2pdf->addFont($family='helvetica');
		
		//SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('real');
 
        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html->getContent());
        	
        $random_id = rand(1,9999);
		
        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir 		(exemple : Facture, Règlement…)
        $html2pdf->Output('EstimationBudget-'.$nom.'-'.$prenom.'-'.$random_id.'.pdf');
         
     
        return new Response();
	}
	
	public function contactAction(Request $request)
	{
		$form = $this->createFormBuilder()
					 ->setAction($this->generateUrl('site_contact'))
					 ->add('nom', 'text', array('label' => 'Votre nom :', 
											  'attr'  => array('class' => 'ident', 
																'placeholder' => 'Nom de famille')))
					->add('prenom', 'text', array('label' => 'Votre prénom :', 
												  'attr'  => array('class' => 'ident', 
																  'placeholder' => 'Prénom')))
					->add('email', 'email', array('label' => 'Votre adresse email :', 
												 'attr'  => array('class' => 'ident',
												 				  'placeholder' => 'Email@valid.fr')))
					->add('phone', 'text', array('label' => 'Votre numéro de téléphone :', 
												 'attr'  => array('class' => 'ident', 
																  'placeholder' => '0616071975')))
					->add('adress', 'text', array('label' => 'Votre adresse :', 
												 'attr'  => array('class' => 'ident', 
																  'placeholder' => 'Votre adresse')))
					->add('ville', 'text', array('label' => 'Ville :', 
												 'attr'  => array('class' => 'ident', 
																  'placeholder' => 'Ville')))
				    ->add('subject','choice', array('label' => 'A quel sujet ?','empty_value' => 'Choisissez une catégorie',
				    								'attr' => array('class' => 'selecteurs'),
				    								'choices' => array('0' => 'Une question sur les devis',
				    												   '1' => 'A propos de l\'entreprise',
				    												   '2' => 'Une question sur l\'organisation',
				    												   '3' => 'A propos des disponibilités',)))
				    ->add('message', 'textarea', array('label' => 'Votre message :',
				   									   'attr' => array('placeholder' => 'Votre message ici..',
				   									   					'class' 	 => 'ident-area')))
					->getForm();
		
		$form->handleRequest($request);
		
		if ($form->isValid()) {

        	return $this->redirect($this->generateUrl('site_taskSuccess'));
		}
    
		
					 
		return $this->render('SiteBundle:Site:contact.html.twig', array('form' => $form->createView()));
	}
	
	public function taskSuccessAction()
	{
		return $this->render('SiteBundle:Site:task_success.html.twig');	
	}
	
	public function quisuisjeAction()
	{
		return $this->render('SiteBundle:Site:quisuisje.html.twig');
	}
	
	public function faqAction()
	{
		return $this->render('SiteBundle:Site:faq.html.twig');
	}
	
	public function appelmeAction()
	{
		$form = $this->createFormBuilder()
					 ->add('phone' , 'text', array('label' => 'N° de téléphone:',
					 										  'attr' => array('class' => 'ct-phone', 'placeholder' => 'Ex: 0674386078')))
					 ->add('Ok', 'button', array('attr' => array('class' => 'ct-phone-sub')))
					 ->getForm();
					 
		return $this->render('SiteBundle:Site:apl-me.html.twig', array('form' => $form->createView()));
	}
	
	public function ajaxAppelmeAction(Request $request)
	{
		
		if($request->isXmlHttpRequest())
		{
			$phone = '';
			$phone = $request->request->get('phone');

			if($phone){
                // On envoie le message par mail
				$message = \Swift_Message::newInstance()
	                    ->setContentType('text/html')
	                    ->setSubject('Téléphone : Rappeler le numéro: '.$phone.'')
	                    ->setFrom('gaucks@gmail.com')
	                    ->setTo('gaucks@gmail.com')
	                    ->setBody('A rappeler dans les 48heures : '.$phone.'');
	
						$this->get('mailer')->send($message);
						
						
						return new Response('<p class="valid">Votre demande à bien été prise en compte.</p>');
			}
			
		}
	}
}
