<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Bridge\Tests;

use L37sg0\DesignPatterns\Structural\Bridge\HelloWorldService;
use L37sg0\DesignPatterns\Structural\Bridge\HtmlFormatter;
use L37sg0\DesignPatterns\Structural\Bridge\PingService;
use L37sg0\DesignPatterns\Structural\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter() {
        $service = new HelloWorldService(new PlainTextFormatter());

        $this->assertSame('Hello World', $service->get());
    }

    public function testCanPrintUsingHtmlFormatter() {
        $service = new PingService(new HtmlFormatter());

        $this->assertSame('<p>pong</p>', $service->get());
    }
}