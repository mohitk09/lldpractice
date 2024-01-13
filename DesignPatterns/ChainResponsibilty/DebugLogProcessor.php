<?php

namespace ChainResponsibility;

class DebugLogProcessor extends LogProcessor
{
    public function __construct(LogProcessor $nextLogProcessor = null)
    {
        parent::__construct($nextLogProcessor);
    }

    public function log(int $level, string $message): void
    {
        if ($level === LogProcessor::INFO) {
            print_r("Info", $message);
            return;
        }
        LogProcessor::log($level, $message);
    }
}
