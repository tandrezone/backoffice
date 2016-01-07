<?php
/**
 * [$firstAppRouting Closure to internal routing, needed in all internal routes]
 * To create a internal routing use $NAMERouting = function($router, $prefix){$router->addRoutes(array(array('GET','/'.$prefix, 'start.index')));}
 */
$intRoute = function($router,$prefix){
  $router->addRoutes(array(
    array('GET','/'.$prefix, 'start.index', 'moonlight/backoffice'),
    array('GET','/'.$prefix.'/users', 'start.users', 'moonlight/backoffice'),
    array('GET','/'.$prefix.'/users/[i:id]', 'start.users', 'moonlight/backoffice')
  ));
}



 ?>
