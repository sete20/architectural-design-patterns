<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use Structural\AdapterThirdPartyExample\Adapters\BasicAuthAdapter;
use Structural\AdapterThirdPartyExample\Models\UserLogin;
use Structural\AdapterThirdPartyExample\Adapters\TokenAuthAdapter;

class AdapterThirdPartyExampleTest extends TestCase
{
    public function testCanAuthWithBasicAuthLib()
    {
        $basicAuthAdapter = $this->createMock(BasicAuthAdapter::class);
        $basicAuthAdapter->expects($this->once())
            ->method('login')
            ->willReturn('test-test');
        $userLogin = new UserLogin($basicAuthAdapter);
        $userLogin->login(['username'=>'test','password' => 'test']);
    }

    public function testCanAuthWithTokenAuthLib()
    {
        $tokenAuthAdapter = $this->createMock(TokenAuthAdapter::class);
        $tokenAuthAdapter->expects($this->once())
            ->method('login')
            ->willReturn(base64_encode('test-test'));
        $userLogin = new UserLogin($tokenAuthAdapter);
        $userLogin->login(['key'=>'test','token' => 'test']);
    }
}