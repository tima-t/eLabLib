<?php
// Routes


$app->get('/', function ($req, $res, $args) {
    include "../controllers/loginC.php";
})->add($mw);


$app->get('/name', function ($req, $res, $args) {
    echo ' Hello '.$args['name'];
})->add($mw);


$app->group('/home', function () use ($app) {
    $app->get('/welcome', function ($request, $response) {
        return $response->getBody()->write("welcome " . date('Y-m-d H:i:s'));
    });
    $app->get('/time', function ( $request, $response) {
        return $response->getBody()->write(time());
    });
});

$app->get('/books/{id}', function ($request, $response, $args) {
    // Show book identified by $args['id']
    echo $args['id'];
});

$app->get('/books', function ($request, $response, $args) {
    // Show book identified by $args['id']
    echo "aaa";
});

$app->get('/books/{name}/{id}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $id = $request->getAttribute('id');
    $response->getBody()->write("Hello, $name , $id");
});
