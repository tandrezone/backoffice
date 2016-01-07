<?php
use_model("users","moonlight/auth");
class start extends controller{
  function index() {
  return $this->view->make('index')->render();
  }
  function users($params){
    $id = $params['id'];
    if($id == ""){
      $users = $this->em->getRepository('user')->findAll();
      return $this->view->make('list', ["users" => $users])->render();
    } else {
      $users = $this->em->getRepository('user')->findById($id);
      $user = $users[0];
      return $this->view->make('new',["user" => $user])->render();
    }


  }
  function access($functionName, $me){
    return true;
  }
  function criar(){
    if(!empty($_POST)){
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $level = $_POST['level'];

      $user = new user();
      $user->setName($username);
      $user->setPass($password);
      $user->setEmail($email);
      $user->setLevel($level);
      $user->setToken(md5(rand()));
      $this->em->persist($user);
      $this->em->flush();

      goToUrl("/bo/users");
    } else {
      return $this->view->make('new')->render();
    }

  }
  function remove(){
    $id = $_POST['id'];
    $users = $this->em->getRepository('user')->findById($id);
    $user = $users[0];
    $this->em->remove($user);
    $this->em->flush();
  }
}
 ?>
