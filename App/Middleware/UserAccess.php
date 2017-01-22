<?php
namespace App\Middleware;
use App\Model\Service;

class UserAccess
{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __invoke($request, $response, $next)
    {
        $route = $request->getAttribute('route');
        $userId = $route->getArguments()['id'];

        // Check the user access
        $response = $next($request, $response);
        return $response;
    }
}
