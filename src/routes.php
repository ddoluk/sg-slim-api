<?php


$app->group('/api',function () use ($app){
    $app->get('/all','ApiController:allAction');
    $app->post('/create','ApiController:createAction');
    $app->put('/{id}/update','ApiController:updateAction');
    $app->get('/{id}/edit','ApiController:editAction');
    $app->delete('/{id}/delete','ApiController:deleteAction');
});
$app->get('/','DefaultController:indexAction');
