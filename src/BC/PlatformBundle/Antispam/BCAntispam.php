<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 09/01/18
 * Time: 15:33
 */
namespace BC\PlatformBundle\Antispam;

class BCAntispam
{
    private $mailer;
    private $locale;
    private $minLenght;

    public function __construct(\Swift_Mailer $mailer, $locale, $minLenght)
    {
        $this->mailer = $mailer;
        $this->locale = $locale;
        $this->minLenght = $minLenght;
    }

    /**
     * Vérification si spam ou non
     *
     * @param string $text
     * @return bool
     */
    public function isSpam($text)
    {
        return strlen($text) < $this->minLenght;
    }
}