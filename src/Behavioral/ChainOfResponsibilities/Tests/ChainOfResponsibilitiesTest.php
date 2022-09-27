<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\ChainOfResponsibilities;

use L37sg0\DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible\HttpInMemoryCacheHandler;
use L37sg0\DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible\SlowDatabaseHandler;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilitiesTest extends TestCase
{
    private Handler $chain;

    protected function setUp(): void
    {
        $this->chain = new HttpInMemoryCacheHandler(
            ['/foo/bar?index=1'  => 'Hello in Memory!'],
            new SlowDatabaseHandler()
        );
    }

    public function testCanRequestKeyInFastStorage() {
        $uri = $this->createMock(UriInterface::class);
        $uri->method('getPath')->willReturn('/foo/bar');
        $uri->method('getQuery')->willReturn('index=1');
        
        $request = $this->createMock(RequestInterface::class);
        $request->method('getMethod')->willReturn('GET');
        $request->method('getUri')->willReturn($uri);
        
        $this->assertSame('Hello in Memory!', $this->chain->handle($request));
    }
    
    public function testCanRequestKeyInSlowStorage() {
        $uri = $this->createMock(UriInterface::class);
        $uri->method('getPath')->willReturn('/foo/baz');
        $uri->method('getQuery')->willReturn('');
        
        $request = $this->createMock(RequestInterface::class);
        $request->method('getMethod')->willReturn('GET');
        $request->method('getUri')->willReturn($uri);
        
        $this->assertSame('Hello World!', $this->chain->handle($request));
    }
}