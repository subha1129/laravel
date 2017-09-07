<?php
  class LoginModel {
      
  public static function adminLogin($arrPostData){
     //print_r($arrPostData);
      
    $Useremail = $arrPostData['useremail'];
    $password = $arrPostData['password']; 
      
    $db = Db::getInstance(); 

      
    $req = $db->prepare('SELECT * FROM user WHERE user_email = :email AND user_password = :password');  
    $req->execute(array('email' => $Useremail,'password' => $password));
    $reUserData = $req->fetch();  
    return $reUserData;

    }   
      
      
  }