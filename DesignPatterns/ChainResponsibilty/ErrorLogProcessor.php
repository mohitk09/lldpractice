<?php

namespace ChainResponsibility;

class ErrorLogProcessor extends LogProcessor
{
    public function __construct(LogProcessor $nextLogProcessor = null)
    {
        parent::__construct($nextLogProcessor);
    }

    public function log(int $level, string $message): void
    {
        if ($level === LogProcessor::ERROR) {
            print_r("Error", $message);
            return;
        }
        LogProcessor::log($level, $message);
    }
}
