<?php

namespace ChainResponsibility;

abstract class LogProcessor
{
    public static const INFO = 1;
    public static const DEBUG = 2;
    public static const ERROR = 3;

    public $nextLogProcessor;

    public function __construct(LogProcessor $logProcessor = null)
    {
        $this->nextLogProcessor = $logProcessor;
    }

    public function log(int $logLevel, string $message): void
    {
        if ($this->nextLogProcessor !== null) {
            $this->nextLogProcessor->log($logLevel, $message);
        }
    }
}
