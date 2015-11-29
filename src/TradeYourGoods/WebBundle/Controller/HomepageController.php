<?php

namespace TradeYourGoods\WebBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TradeYourGoods\InfrastructureBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;

class HomepageController extends Controller
{
    const LIMIT = 10;
    
    public function indexAction(Request $request)
    {
        
        $mobile = $request->query->get('mobile');
        
         $offset = $request->query->get('offset');
         
         $ads = $this->getAdverts($offset);
         
        
        return $this->render('TradeYourGoodsWebBundle::homepage.html.php', array('mobile' => $mobile, 'ads' => $ads));
    }
    
    public function getAdverts($offset) {
        
         $entityManager = $this->container->get('doctrine')->getManager();
        assert($entityManager instanceof EntityManager);

        return $entityManager->getRepository('TradeYourGoodsInfrastructureBundle:Advert')
            ->findBy(array(),NULL,  self::LIMIT, $offset);
        
        
    }
    
}
