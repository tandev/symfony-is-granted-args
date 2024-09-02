<?php

namespace App\Controller;

use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[AsController]
class FooController
{
    #[Route(path: '/foo/{id}', methods: ['GET'], name: 'foo_show')]
    #[IsGranted(
        attribute: new Expression('1 === subject'),
        subject: new Expression('args("id")'),
        statusCode: 404)]
    public function show(int $id): Response
    {
        return new Response();
    }
}