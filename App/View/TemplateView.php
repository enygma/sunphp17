<?php

namespace App\View;
use \Psr\Http\Message\ResponseInterface;

class TemplateView extends \Slim\Views\Twig
{
    public function render(ResponseInterface $response, $template, $data = [])
    {
        // This is where you'd load things for the entire template to use
        $user = $this['container']->session->get('user');
        if ($user !== null) {
            $data['user'] = $user;
        }

        // Add any messages
        $data['messages'] = $this['container']->message->get();

        parent::render($response, $template, $data);
    }
}
