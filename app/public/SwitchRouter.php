<?php

class SwitchRouter
{
    public function route($uri, $method, $body)
    {
        switch ($uri) {
            case '':
                require __DIR__ . '/controller/homecontroller.php';
                $controller = new HomeController();
                $controller->index();
                break;
            case 'about':
                require __DIR__ . '/controller/homecontroller.php';
                $controller = new HomeController();
                $controller->about();
                break;
            case 'articles':
                require __DIR__ . '/controller/articlecontroller.php';
                $controller = new ArticleController();
                $method === 'POST'
                    ? $controller->createArticle(json_decode($body, true))
                    : $controller->index();
                break;
            default:
                echo '404 not found';
                http_response_code(404);
                break;
        }
    }
}
