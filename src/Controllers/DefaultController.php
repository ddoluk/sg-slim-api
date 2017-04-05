<?php

namespace App\Controllers;


use App\Core\Controller;
use Slim\Http\Request;
use Slim\Http\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request, Response $response)
    {
        $this->view->render($response, 'rest/index.html.twig');
    }
}