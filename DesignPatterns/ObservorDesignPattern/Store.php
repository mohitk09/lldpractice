<?php

namespace ObservorDesignPattern;

use Observable\WheyProtein;
use Observer\EmailNotificationAlterObserver;

class Store
{
    public static function main(): void
    {
        $wheyProteinObservable = new WheyProtein();

        $observer1 = new EmailNotificationAlterObserver('xyz@gmail.com');
        $observer2 = new EmailNotificationAlterObserver('abc@gmail.com');

        $wheyProteinObservable->add($observer1);
        $wheyProteinObservable->add($observer2);

        $wheyProteinObservable->setStockCount(10);
    }
}
