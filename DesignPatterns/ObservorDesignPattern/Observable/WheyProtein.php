<?php

namespace Observable;

use Observer\NotificationAlertObserver;

class WheyProtein implements StockObservable
{
    /** @var array<NotificationAlterObserver> */
    public $observer_list = array();
    private $stockCount = 0;

    public function add(NotificationAlertObserver $observer): void
    {
        array_push($this->observer_list, $observer);
    }

    public function remove(NotificationAlertObserver $observer): void
    {
        unset($this->observer_list[$observer]);
    }

    public function notifySubscribers(): void
    {
        foreach ($this->observer_list as $observer) {
            $observer->update();
        }
    }

    public function setStockCount(int $newStockCount): void
    {
        if ($this->stockCount === 0) {
            $this->notifySubscribers();
        }
        $this->stockCount += $newStockCount;
    }

    public function getStockCount(): int
    {
        return $this->stockCount;
    }
}
