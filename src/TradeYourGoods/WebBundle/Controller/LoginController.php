<?php

namespace TradeYourGoods\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TradeYourGoods\InfrastructureBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;

class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('TradeYourGoodsWebBundle:Login:index.html.php', array());
    }

    public function checkAction(Request $request)
    {
        try {
        if (!$request->request->has('mobile')) {
            return $this->render('TradeYourGoodsWebBundle:Login:index.html.php', array('error' => 'true'));
        }

        // Check mobile number
        $mobile = $request->request->get('mobile');
        $user = $this->getUserByMobile($mobile);
        if (!$user instanceof Users) {
            return $this->render('TradeYourGoodsWebBundle:Login:register.html.php', array('mobile' => $mobile));
        }

        // Check password
        $password = $request->request->get('password');
        $correct = $this->checkPassword($user, $password);

        if ($correct) {
            return $this->redirectToRoute('trade_your_goods_homepage', array('mobile' => $mobile));
        }

        } catch (\Exception $e) {
            var_dump($e->getTrace());
        }
        return $this->render('TradeYourGoodsWebBundle:Login:index.html.php', array('error' => 'true'));
    }

    /**
     *
     * @param string $mobile
     * @return Users
     */
    private function getUserByMobile($mobile) {

        $entityManager = $this->container->get('doctrine')->getManager();
        assert($entityManager instanceof EntityManager);

        return $entityManager->getRepository('TradeYourGoodsInfrastructureBundle:Users')
            ->findOneBy(array('mobile' => $mobile));
    }

    /**
     *
     * @param Users $user
     * @param string $clearPassword
     * @return boolean
     */
    private function checkPassword(Users $user, $clearPassword)
    {
        $cryptedPassword = $user->getPassword();
        $comparePassword = $this->container->get('password_encryptor')
            ->encrypt($user->getMobile(), $clearPassword);

        return $cryptedPassword === $comparePassword;
    }
}
