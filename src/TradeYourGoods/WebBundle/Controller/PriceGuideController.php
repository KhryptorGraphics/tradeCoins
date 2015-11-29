<?php

namespace TradeYourGoods\WebBundle\Controller;

use TradeYourGoods\InfrastructureBundle\Entity\Advert;
use Doctrine\ORM\EntityManager;

class PriceGuideController
{
    /**
     *
     * @param type $price
     * @return type
     */
    public function showAction($price)
    {
        $ads = $this->getAdvertsByPrice($price);

        $guide = [];
        foreach ($ads as $ad) {
            $guide[] = [
                'item' => $ad->getItem(),
                'quantity' => $ad->getQuantity()
            ];
        }

        return $this->render('TradeYourGoodsWebBundle::price_guide.html.php', array('guide' => $guide));
    }

    /**
     *
     * @param type $price
     * @return Advert[]
     */
    private function getAdvertsByPrice($price)
    {
        $entityManager = $this->container->get('doctrine')->getManager();
        assert($entityManager instanceof EntityManager);

        return $entityManager->getRepository('TradeYourGoodsInfrastructureBundle:Advert')
            ->findBy(array('price' => $price));
    }


}
