<?php

namespace Observer;

use Observable\StockObservable;

class EmailNotificationAlterObserver implements NotificationAlertObserver
{

    public string $emailID;
    public StockObservable $stockObservable;

    public function __construct(string $emailID, StockObservable $stockObservable)
    {
        $this->emailID = $emailID;
        $this->stockObservable = $stockObservable;
    }

    public function update(): void
    {
        $this->sendEmail();
    }

    private function sendEmail(): void
    {
        echo 'I am just here to send emails';
    }
}
