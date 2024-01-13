<?php

namespace ChainResponsibility;

class Main
{
    public static function main(): void
    {
        $logObject = new InfoLogProcessor(new DebugLogProcessor());
        $logObject->log(LogProcessor::ERROR, "tricky scenario, can't hamdle");
    }
}
