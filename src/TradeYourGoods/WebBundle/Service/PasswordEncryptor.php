<?php

namespace TradeYourGoods\WebBundle\Service;

class PasswordEncryptor
{
    private $passwordSalt;

    /**
     *
     * @param type $passwordSalt
     */
    public function __construct($passwordSalt)
    {
        $this->passwordSalt = $passwordSalt;
    }

    /**
     *
     * @param string $mobile
     * @param string $clearPassword
     * @return string
     */
    public function encrypt($mobile, $clearPassword)
    {
        return md5($mobile . $clearPassword .$this->passwordSalt);
    }
}
