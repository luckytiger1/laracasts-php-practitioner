<?php

//$database = require 'core/bootstrap.php';

$tasks = $database->selectAll('todos');

//dd($results[0]->description);

require 'views/index.view.php';