<?php

namespace App\EventSuscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use App\Events\FooEvent;
use App\Events\BarEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class ExceptionSuscriber implements EventSubscriberInterface
{
    public static function getSuscriberEvents()
    {
        // Liste des évènements, méthodes et priorités
        return [
            'foo' => [
                ['doSomething', 10],
            ],
            'bar' => [
                ['doOtherThing', 0],
            ],
        ];
    }
    public function doSomething(FooEvent $event){}

    public function doOtherthing(FooEvent $event){}

    public function doBarThing(BarEvent $event){}

    

}
  