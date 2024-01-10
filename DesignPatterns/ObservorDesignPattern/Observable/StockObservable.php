<?php

namespace Observable;

use Observer\NotificationAlertObserver;

interface StockObservable
{
    public function add(NotificationAlertObserver $observer): void;

    public function remove(NotificationAlertObserver $observer): void;

    public function notifySubscribers(): void;

    public function setStockCount(int $newStockAdded): void;

    public function getStockCount(): int;
}
