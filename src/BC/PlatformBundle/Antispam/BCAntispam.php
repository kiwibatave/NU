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
        // $this->locale = $locale; modif du 11/02/18
        $this->minLenght = $minLenght;
    }
    // Modif du 11/02/18
    public function setLocale($locale)
    {
        $this->locale = $locale;
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