<?php

namespace appartoo\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
         $ess = $this->getUser();
        $f = $ess->getId();
        return $this->render('UserBundle:dashboard:index_add.html.twig', array( 'ess' => $ess));
    }
    
    public function addAction() {
         
          $ess = $this->getUser();
        $f = $ess->getId();
        

        $em = $this->getDoctrine()->getEntityManager();
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') {
            $pass = new \appartoo\UserBundle\Entity\Contact();
           
          
              $pass->setIdUser($f);
            $pass->setPrenom($_POST['prenom']);
              $pass->setNom($_POST['nom']);
            $pass->setEmail($_POST['email']);
            $pass->setAdresse($_POST['adresse']);
            $pass->setTel($_POST['tel']);
 
            $pass->setSite($_POST['site']);
            

            $em->persist($pass);
            $em->flush();
            //////////////////////
            $subject="Inscription sur l'annuaire Appartoo";
            $message = "Cher ".$pass->getPrenom().", nous vous invitons
                    à vous inscrire sur notre plateforme de gestion de contact
                    depuis ce lien : http://localhost/appartoo/web/app_dev.php/register " ;
            
            $mailer = $this->container->get('mailer');
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 466, 'ssl')
                    ->setUsername('walid.appartoo@gmail.com')
                    ->setPassword('bayabaya');
            $mailer = \Swift_Mailer::newInstance($transport);
            $message = \Swift_Message::newInstance('Test')
                    ->setSubject($subject)
                    ->setFrom('walid.appartoo@gmail.com')
                    ->setTo($pass->getEmail())
                    ->setBody($message);
            $this->get('mailer')->send($message);
            ///////////////////////
            
                   $pass2 = $em->getRepository("UserBundle:Contact")->findBy(array('idUser' => $f));
        return $this->render('UserBundle:Dashboard:liste.html.twig', array( 'contact' => $pass2, 'ess' => $ess));

        }
     }
    
     
     public function viewAction() {
       $ess = $this->getUser();
                $f = $ess->getId();
                $em1 = $this->getDoctrine()->getManager();
      
       $pass2 = $em1->getRepository("UserBundle:Contact")->findBy(array('idUser' => $f));
        return $this->render('UserBundle:Dashboard:liste.html.twig', array( 'contact' => $pass2 , 'ess' => $ess));
        
    }
     
     
     
     public function deleteAction($id) {
     
        $em = $this->getDoctrine()->getEntityManager();
        $request = $this->container->get('request');
    
          $pass3 = new \appartoo\UserBundle\Entity\Contact();
          $pass3 = $em->getRepository('UserBundle:Contact')->findOneById($id);
          $em->remove($pass3);
          $em->flush();
          // $ctct = $em->getRepository("UserBundle:Contact")->findAll();
        return $this->viewAction() ;
  // sleep(10);

            
        }

        
   public function updateAction($id) {
     $ess = $this->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $request = $this->container->get('request');
    
          $pass4 = new \appartoo\UserBundle\Entity\Contact();
          $pass4 = $em->getRepository('UserBundle:Contact')->findOneById($id);
          
          
         
          // $ctct = $em->getRepository("UserBundle:Contact")->findAll();
        return $this->render('UserBundle:Dashboard:modifier.html.twig', array( 'contact' => $pass4 , 'ess' => $ess));
  // sleep(10);

            
        }      
        
 public function update1Action($id) {
       $ess = $this->getUser();
        $f = $ess->getId();
        

        $em = $this->getDoctrine()->getEntityManager();
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') {
            $pass = $em->getRepository('UserBundle:Contact')->find($id);
           
          
              $pass->setIdUser($f);
            $pass->setPrenom($_POST['prenom']);
              $pass->setNom($_POST['nom']);
            $pass->setEmail($_POST['email']);
            $pass->setAdresse($_POST['adresse']);
            $pass->setTel($_POST['tel']);
 
            $pass->setSite($_POST['site']);
            

            $em->persist($pass);
        $em->flush();}
           return $this->viewAction() ; 
        }   
        
        
        
}
