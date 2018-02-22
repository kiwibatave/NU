<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 12/02/18
 * Time: 16:43
 */

namespace BC\PlatformBundle\Beta;

use Symfony\Component\HttpFoundation\Response;
// ajout du use suivant 14/02/18
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class BetaListener
{
    // Le processeur
    protected $betaHTML;

    // La date de la version BETA
    protected $endDate;

    public function __construct(BetaHTMLAdder $betaHTML, $endDate)
    {
        $this->betaHTML = $betaHTML;
        $this->endDate = new \Datetime($endDate);
    }
    // modif du 14/02/18
    public function processBeta(FilterResponseEvent $event)
    {
        // modif du 14/02/18
        if (!$event->isMasterRequest()) {
            return;
        }

        $remainingDays = $this->endDate->diff(new \Datetime())->days;

        if ($remainingDays <= 0) {
            // Si la date est passée, on ne retourne rien
            return;
        }
        // modif du 14/02/18 (utilisation du BetaHTML
        $response = $this->betaHTML->addBeta($event->getResponse(), $remainingDays);

        // On actualise la réponse avec la new value
        $event->setResponse($response);
    }
}