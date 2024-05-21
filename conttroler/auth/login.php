<?php
  include('C:/xampp/htdocs/ccrud/model/loginModel.php'); // panggil model dari login
  
  class login extends loginModel{
    //main function
    public function index(){
      require('C:/xampp/htdocs/ccrud/view/auth/login.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new login();
  if(isset($_POST['submit'])){
    $class->login();
  }
  else{
    $class->index();
    
  }