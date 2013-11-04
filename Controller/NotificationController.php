<?php

/*
 * This file is part of the MangopayBundle package.
 *
 * (c) Samuel Gordalina <https://github.com/gordalina/mangopay-bundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gordalina\Bundle\MangopayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Gordalina\Bundle\MangopayBundle\Event\OperationsEvent;

class NotificationController extends Controller
{
    /**
     * Handles Mangopay notifications.
     * It issues an event which can be handled separately
     *
     * @param  Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $operationsClass = $this->getContainer()->getParameter(
            'gordalina_mangopay.notification.operations.class'
        );

        $operations = new $operationsClass();
        $operations->jsonUnserialize($request->get('operation'));

        switch ($operations->getTransactionType()) {
            case 'Contribution':
            case 'Withdrawal':
            case 'Refund':
                $eventName = sprintf('%s_COMPLETED', strtoupper($operations->getTransactionType()));
                $eventId = constant('Gordalina\\Bundle\\MangopayBundle\\MangopayEvents::%s', $eventName);

                $dispatcher = $this->get('event_dispatcher');
                $dispatcher->dispatch($eventId, new OperationsEvent($operations));
            break;

            default:
                $logger = $this->get('logger');
                $logger->alert(sprintf(
                    'Mangopay notification transaction type is unknown: %s',
                    $operations->getTransactionType())
                );
        }

        // return 200 OK
        // @link http://www.mangopay.com/api-references/notifications/
        return new Response();
    }
}
