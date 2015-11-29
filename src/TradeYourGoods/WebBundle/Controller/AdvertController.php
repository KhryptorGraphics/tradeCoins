<?php

namespace TradeYourGoods\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TradeYourGoods\InfrastructureBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;

class AdvertController extends Controller
{
    public function indexAction(Request $request)
    {
        $adId = $request->query->get('adId');
        $advert = $this->getAdvertById($adId);
        $user = $this->getUserById($advert->getUserId());

        $info = [];
        $info['user']['name'] = $user->getName();
        $info['user']['lastname'] = $user->getLastname();
        $info['user']['email'] = $user->getEmail();
        $info['user']['mobile'] = $user->getMobile();
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
}
