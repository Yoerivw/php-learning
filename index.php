<?php 

require 'functions.php';

$query = require 'bootstrap.php';

require 'task.php';




$tasks = $query->selectAll('todos');

die(var_dump($tasks));




require 'index.view.php';