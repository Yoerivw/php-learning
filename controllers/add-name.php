<?php 

App::get('database')->insert('users', [
    'name' => $_POST['name']
]);

//relocate after it's done
header('location: /');
/* require('add-name.views.php'); */