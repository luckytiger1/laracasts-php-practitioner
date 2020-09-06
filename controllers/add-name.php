<?php

App::get('database')->insertData('names', [
    'name' => $_POST['name']
]);

header('Location: /');

class NamesController
{
    public function addName()
    {

    }
}