<?php
namespace App\Controller;

use \App\Entity\Job;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
// use Symfony\Bundle\FrameworkBundle\Controlle\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
//use Synfony\Component\Routing\Annotaion\Route;

class jobController extends Controller{

  public function indexAction(){

    $em = $this->getDoctrine()->getManager();

    $job = new Job();
    $job->setTitle('On recherche un Dev JS');
    $job->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
    $job->setCategorie(2);

    $em->persist($job);
    $em->flush();
    return $this->render('job/index.html.twig');
  }

  public function jobShowAction(){
    return $this->render('job/job_show.html.twig');
  }
}
 ?>
