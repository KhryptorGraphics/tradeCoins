<?php

namespace TradeYourGoods\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TradeYourGoods\InfrastructureBundle\Entity\Users;
use TradeYourGoods\InfrastructureBundle\Entity\Advert;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use TradeYourGoods\WebBundle\Controller\LoginController;

class AdvertController extends Controller
{
    public function indexAction(Request $request)
    {
        $adId = $request->query->get('adId');
        $currentUserMobile = $request->query->get('mobile');
        $currUser = $this->getUserByMobile($currentUserMobile);

        $advert = $this->getAdvertById($adId);
        $user = $this->getUserById($advert->getUserId());

        $info = [];
        $info['curr_user']['id'] = $currUser->getId();
        $info['user']['name'] = $user->getName();
        $info['user']['lastname'] = $user->getLastname();
        $info['user']['email'] = $user->getEmail();
        $info['user']['mobile'] = $user->getMobile();
        $info['product']['id'] = $advert->getId();
        $info['product']['title'] = $advert->getTitle();
        $info['product']['description'] = $advert->getDescription();
        $info['product']['price'] = $advert->getPrice();

        return $this->render('TradeYourGoodsWebBundle:Advert:advert.html.php', array('info' => $info));
    }

    private function getAdvertById($adId)
    {
        $entityManager = $this->container->get('doctrine')->getManager();
        assert($entityManager instanceof EntityManager);

        return $entityManager->getRepository('TradeYourGoodsInfrastructureBundle:Advert')
            ->findOneBy(array('id' => $adId));
    }

    private function getUserById($userId) {

        $entityManager = $this->container->get('doctrine')->getManager();
        assert($entityManager instanceof EntityManager);

        return $entityManager->getRepository('TradeYourGoodsInfrastructureBundle:Users')
            ->findOneBy(array('id' => $userId));
    }
    
    private function getUserByMobile($mobile) {
        $entityManager = $this->container->get('doctrine')->getManager();
        assert($entityManager instanceof EntityManager);

        return $entityManager->getRepository('TradeYourGoodsInfrastructureBundle:Users')
            ->findOneBy(array('mobile' => $mobile));
    }

    public function createAction(Request $request) {
    
        $title = $request->request->get('title');
        $item = $request->request->get('item');
        $quantity = $request->request->get('quantity');
        $price = $request->request->get('price');
        $description = $request->request->get('description');
        
        $mobile = $request->request->get('mobile');
        echo "mobile:". $mobile;
        
        $user = $this->getUserByMobile($mobile);
        
        $user_id = $user->getId();
        
        $entityManager = $this->container->get('doctrine')->getManager();
        assert($entityManager instanceof EntityManager);
        
        $ad = new Advert();
         
        $ad->setUserId($user_id);
        
        $ad->setTitle($title);
        $ad->setItem($item);
        $ad->setQuantity($quantity);
        $ad->setPrice($price);
        $ad->setDescription($description);
        
        $entityManager->persist($ad);
        $entityManager->flush();
        
        return $this->redirectToRoute('trade_your_goods_homepage', array('mobile' => $mobile, 'offest' => 0));
        
        
    }
   
}
