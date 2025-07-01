<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Message;
use Psr\Http\Message\ResponseInterface;
use Yiisoft\Yii\View\Renderer\ViewRenderer;

final class SiteController
{
    public function __construct(private ViewRenderer $viewRenderer)
    {
        $this->viewRenderer = $viewRenderer->withControllerName('site');
    }

    public function index(): ResponseInterface
    {
        $message = new Message();
        $greeting = $message->getGreeting();

        return $this->viewRenderer->render('index', ['greeting' => $greeting]);
    }
}