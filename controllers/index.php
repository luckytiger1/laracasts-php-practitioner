<?php


$tasks = App::get('database')->selectAll('names');

require 'views/index.view.php';