<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Todo;
use Slim\Http\Response;
use Slim\Http\Request;

class ApiController extends Controller
{
    public function allAction(Request $request, Response $response)
    {
        $tasks = Todo::all();
        $response = $response->withHeader('Content-type', 'application/json');
        $response = $response->withJson($tasks);

        return $response;
    }

    public function createAction(Request $request, Response $response)
    {
        $data = $request->getParsedBody();
        Todo::create($data);
    }

    public function editAction(Request $request, Response $response, $id)
    {
        $edit = Todo::find($id);
        $response = $response->withHeader('Content-type', 'application/json');
        $response = $response->withJson($edit);

        return $response;
    }
}