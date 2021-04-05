<?php



//if the name and email inputs have been filled in, open up a connection to the database.
$users = $app['database']->selectAll('users');






require 'views/index.view.php';