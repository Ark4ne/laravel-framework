<?php

use Illuminate\Console\Scheduling\Event;
use \Symfony\Component\Process\ProcessUtils;

class EventTest extends PHPUnit_Framework_TestCase
{
    public function testBuildCommand()
    {
        $event = new Event('php -i');

        $defaultOutput = (DIRECTORY_SEPARATOR == '\\') ? 'NUL' : '/dev/null';
        $defaultOutputEscaped = ProcessUtils::escapeArgument($defaultOutput);
        $this->assertSame("php -i > {$defaultOutputEscaped} 2>&1 &", $event->buildCommand());
    }

    public function testBuildCommandSendOutputTo()
    {
        $event = new Event('php -i');

        $event->sendOutputTo('/dev/null');
        $defaultOutputEscaped = ProcessUtils::escapeArgument('/dev/null');
        $this->assertSame("php -i > {$defaultOutputEscaped} 2>&1 &", $event->buildCommand());

        $event = new Event('php -i');

        $event->sendOutputTo('/my folder/foo.log');
        $defaultOutputEscaped = ProcessUtils::escapeArgument('/my folder/foo.log');
        $this->assertSame("php -i > {$defaultOutputEscaped} 2>&1 &", $event->buildCommand());
    }

    public function testBuildCommandAppendOutput()
    {
        $event = new Event('php -i');

        $event->appendOutputTo('/dev/null');
        $defaultOutputEscaped = ProcessUtils::escapeArgument('/dev/null');
        $this->assertSame("php -i >> {$defaultOutputEscaped} 2>&1 &", $event->buildCommand());
    }

    /**
     * @expectedException LogicException
     */
    public function testEmailOutputToThrowsExceptionIfOutputFileWasNotSpecified()
    {
        $event = new Event('php -i');
        $event->emailOutputTo('foo@example.com');

        $event->buildCommand();
    }
}
