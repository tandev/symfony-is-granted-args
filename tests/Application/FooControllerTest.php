<?php



// tests/Controller/PostControllerTest.php
namespace App\Tests\Application;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FooControllerTest extends WebTestCase
{
    public function test_successful(): void
    {
        $client = static::createClient();
        $client->request('GET', '/foo/1');
        self::assertResponseIsSuccessful();
    }

    public function test_unsuccessful(): void
    {
        $client = static::createClient();
        $client->request('GET', '/foo/2');
        self::assertResponseIsSuccessful();
    }
}