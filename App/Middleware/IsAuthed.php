<?php
namespace App\Middleware;
use App\Model\Service;

class IsAuthed
{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __invoke($request, $response, $next)
    {
        // If there's not logged in user, deny
        $user = $this->container->session->get('user');
        if ($user == null) {
            $this->container->message->error('Access Denied!');
            return $response->withRedirect('/error');
        }

        $response = $next($request, $response);
        return $response;
    }
}
