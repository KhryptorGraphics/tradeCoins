<?php

namespace TradeYourGoods\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TradeYourGoods\InfrastructureBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;

class RegisterController extends Controller
{

    public function newAction(Request $request)
    {
        $mobile = $request->request->get('mobile');
        $name = $request->request->get('name');
        $surname = $request->request->get('surname');
        $email = $request->request->get('email');
        $password = $request->request->get('password');
        
        $entityManager = $this->container->get('doctrine')->getManager();
        assert($entityManager instanceof EntityManager);
        
        $utente = new Users();
        
        $cryptedPassword = $this->container->get('password_encryptor')
            ->encrypt($mobile, $password);
         
        $utente->setName($name);
        $utente->setMobile($mobile);
        $utente->setLastname($surname);
        $utente->setEmail($email);
        $utente->setPassword($cryptedPassword);
        
        $entityManager->persist($utente);
        $entityManager->flush();
        
        
        
        return $this->redirectToRoute('trade_your_goods_homepage', array('mobile' => $mobile, 'offest' => 0));
    }

}
