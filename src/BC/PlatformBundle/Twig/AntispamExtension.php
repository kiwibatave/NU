<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 12/02/18
 * Time: 14:34
 */

namespace BC\PlatformBundle\Twig;

use BC\PlatformBundle\Antispam\BCAntispam;

class AntispamExtension extends \Twig_Extension // modif du 11/02/18
{
    /**
     * @var BCAntispam
     */
    private $bcAntispam;

    public function __construct(BCAntispam $bcAntispam)
    {
        $this->bcAntispam = $bcAntispam;
    }

    public function checkIfArgumentIsSpam($text)
    {
        return $this->bcAntispam->isSpam($text);
    }
    // Modif du 11/02/18
    // Twig va éxécuter cette méthode pour savoir quelle(s) fonction(s) ajoute notre service
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('checkIfSpam', array($this, 'checkIfArgumentIsSpam')),
        );
    }
    // Modif du 11/02/18
    // La méthode getName() identifie l'extension Twig, elle devient obligatoire
    public function getName()
    {
        return 'BCAntispam';
    }
}