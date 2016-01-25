<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);
$mw = function ($request, $response, $next) {
    $response->getBody()->write('BEFORE');
    $response = $next($request, $response);
    $response->getBody()->write('AFTER');

    return $response;
};

$mw1 = function ($request, $response, $next) {
    $response->getBody()->write('BEFORE22');
    $response = $next($request, $response);
    $response->getBody()->write('AFTER22');

    return $response;
};
