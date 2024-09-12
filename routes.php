<?php


use App\Router;

Router::addRoute('/', function(){
    $posts = [
                       ['title' => 'Some title 1', 'body' => 'Some  body 1'],
                       ['title' => 'Some title 2', 'body' => 'Some  body 2'],
                       ['title' => 'Some title 3', 'body' => 'Some  body 3'],
                       ['title' => 'Some title 4', 'body' => 'Some  body 4'],
                   ];
            include 'views/index.php';
});

Router::addRoute('us', function(){
    $posts = [
                       ['title' => 'Some title 1', 'body' => 'Some  body 1'],
                       ['title' => 'Some title 2', 'body' => 'Some  body 2'],
                       ['title' => 'Some title 3', 'body' => 'Some  body 3'],
                       ['title' => 'Some title 4', 'body' => 'Some  body 4'],
                   ];
            include 'views/us.php';
});

Router::addRoute('tech', function(){
    $posts = [
                       ['title' => 'Some title 1', 'body' => 'Some  body 1'],
                       ['title' => 'Some title 2', 'body' => 'Some  body 2'],
                       ['title' => 'Some title 3', 'body' => 'Some  body 3'],
                       ['title' => 'Some title 4', 'body' => 'Some  body 4'],
                   ];
            include 'views/tech.php';
});