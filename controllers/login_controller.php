<?php

  class LoginController {
      public function login() {
      // we store all the posts in a variable
      require_once('views/login/login.php');
    } 
      
public function processlogin(){
   //print_r($_POST);
   
 $getLoggedData = LoginModel::adminLogin($_POST);    
    if($getLoggedData){
          echo "logged in";
          $_SESSION['useremail'] = $getLoggedData['user_email'];
          header("location: ".SITE_ROOT.'index.php?controller=home&action=dashboard');
         }
      else{
          require_once('views/login/login.php');
           $error = "Enter valid username and password";
          }
    
    
  }

    public function error() {
      require_once('views/login/error.php');
    }
  }
?>