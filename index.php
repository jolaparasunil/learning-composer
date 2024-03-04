<?php

require_once __DIR__."/vendor/autoload.php";

use Learning\ResponseClass\JsonResponse;

$data = [
  'name' => 'sunil Jolapara'

];

new JsonResponse("unauthorized","",$data);
