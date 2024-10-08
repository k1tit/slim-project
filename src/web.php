
//use Slim\Psr7\Request;
//use Slim\Psr7\Response;

//$app->get('/hello/world', function (Request $request, Response $response, array $args) {
  //  $response->getBody()->write("Hello, world");
  //  return $response;
//});


//$app->run();
<?php
use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

// Простой маршрут GET
$app->get('/hello/world', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello, world!");
    return $response;
});

$app->run();
