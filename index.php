<?php 

use App\core\{Router, Request};

require 'vendor/autoload.php';
require 'core/bootstrap.php';






Router::load('app/routes.php')->direct(Request::uri(),Request::method());