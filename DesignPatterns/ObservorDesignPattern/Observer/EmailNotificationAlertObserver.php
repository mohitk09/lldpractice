<?php

namespace Observer;

class EmailNotificationAlterObserver implements NotificationAlertObserver
{

    public string $emailID;

    public function __construct(string $emailID)
    {
        $this->emailID = $emailID;
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
