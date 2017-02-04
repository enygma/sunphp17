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
        $user = $this->container->session->get('user');

        // We can only see our own user record
        if ($user->id !== (int)$userId) {
            $this->container->message->error('Access Denied!');
            return $response->withRedirect('/error');
        }

        // Check the user access
        $response = $next($request, $response);
        return $response;
    }
}
