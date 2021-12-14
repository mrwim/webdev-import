<?php

class SwitchRouter
{
    public function route($uri, $method, $body, $path)
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
                if ($method === 'POST') {
                    $controller->createArticle(json_decode($body, true));
                }
                if ($method === 'DELETE') {
                    $controller->deleteArticle($path);
                }
                if ($method === 'GET') {
                    if ($path == null) {
                        $controller->index();
                    } else {
                        echo "something else";
                        exit(127);
                    }
                }
                break;
            default:
                echo '404 not found';
                http_response_code(404);
        }
    }
}

