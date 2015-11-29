<?php

namespace TradeYourGoods\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TradeYourGoods\InfrastructureBundle\Entity\Advert;
use TradeYourGoods\InfrastructureBundle\Entity\Users;
use Doctrine\ORM\EntityManager;

class PaymentController extends Controller
{
    public function payAction($userId, $advId)
    {
        $user = $this->getUserById($userId);
        $adv = $this->getAdvertById($advId);

        $seller = $this->getUserById($adv->getUserId());

        $price = $adv->getPrice();

        $credit = $user->getCredit();
        $user->setCredit($credit - $price);

        $credit = $seller->getCredit();
        $seller->setCredit($credit + $price);

        $entityManager = $this->container->get('doctrine')->getManager();
        assert($entityManager instanceof EntityManager);

        $entityManager->persist($user);
        $entityManager->persist($seller);
        $entityManager->remove($adv);
        $entityManager->flush();

        return $this->redirectToRoute('trade_your_goods_homepage', array('mobile' => $user->getMobile()));
    }

    /**
     *
     * @param type $userId
     * @return Users
     */
    private function getUserById($userId) {

        $entityManager = $this->container->get('doctrine')->getManager();
        assert($entityManager instanceof EntityManager);

        return $entityManager->getRepository('TradeYourGoodsInfrastructureBundle:Users')
            ->findOneBy(array('id' => $userId));
    }

    /**
     *
     * @param type $adId
     * @return Advert
     */
    private function getAdvertById($adId)
    {
        $entityManager = $this->container->get('doctrine')->getManager();
        assert($entityManager instanceof EntityManager);

        return $entityManager->getRepository('TradeYourGoodsInfrastructureBundle:Advert')
            ->findOneBy(array('id' => $adId));
    }
}
