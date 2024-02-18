<?php

namespace CommandDesignPattern;

use CommandDesignPattern\Command\TurnOnAc;
use CommandDesignPattern\Invoker\RemoteControl;
use CommandDesignPattern\Receiver\Ac;

class Main
{
    public static function main(): void
    {
        // Ac object
        $ac = new Ac();

        // remote
        $remote = new RemoteControl();

        // Creating the command
        $remote->setCommand(new TurnOnAc($ac));
        $remote->pressButton();

        // trivial stuff
        $remote->undo();

        /*
            Client ----> Invoker(i.e. Remote Control) -> has ICommand(interface)
                                                          |         |    
                                                          |         |     
                                                        Concrete    Another          some other............ 
                                                        class       Concrete class
                                                        |
                                                        has receiver(i.e. Ac obj)
        */
    }
}
