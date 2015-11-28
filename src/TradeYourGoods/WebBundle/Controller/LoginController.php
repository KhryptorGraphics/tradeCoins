<?php

namespace TradeYourGoods\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('TradeYourGoodsWebBundle:Login:index.html.php', array());
    }

    public function checkAction()
    {
        // check number
        $correct = true;

        if ($correct) {
            return $this->render('TradeYourGoodsWebBundle::homepage.html.php', array());
        } else {
            return $this->render('TradeYourGoodsWebBundle:Login:register.html.php', array());
        }
    }
}
