<?php
use_model("users","moonlight/auth");
class start extends controller{
  function index() {
    return "This is the comand that runs when the route is /backoffice and you came to firstapp.dev or secondapp.dev";
  }
  function users($params){
    $id = $params['id'];
    if($id == ""){
      $users = $this->em->getRepository('user')->findAll();
    } else {
      $users = $this->em->getRepository('user')->findById($id);
    }

    return $this->view->make('list', ["users" => $users, "id" => $id])->render();
  }
  function access($functionName, $me){
    return true;
  }
}
 ?>
