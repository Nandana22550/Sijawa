<?php
  include('C:/xampp/htdocs/ccrud/model/registerModel.php'); // panggil model dari register
  
  class register extends registerModel{
    //main function
    public function index(){
      require('C:/xampp/htdocs/ccrud/view/auth/register.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
  }
  $class = new register();
  if(isset($_POST['submit'])){
    $class->regist();
    header('Location:index.php');
  }
  else if(isset($_POST['payment'])){
    $class->payment();
    header('Location:index.php');
  }
  else{
    $class->index();
  }