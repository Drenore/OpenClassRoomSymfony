<?php 

namespace App\EventSuscriber;



use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class SummaryMailSuscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            // 'Kernel.terminate'
            KernelEvents::TERMINATE => [
                ['sendProductPaidMail', 0], 
            ];
        ];
    }
    public function sendProductPailMail(PostResponseEvent $event)
    {
        // envoi du mail
    }
}