<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//use App\Requests\FormRequest;
use Illuminate\Support\Facades\Crypt;
use Validator;
use Illuminate\Support\CreateMailRequest;

class ValidationController extends Controller
{
 public function add(request $request){
            $username=$request->username;
            $lastname=$request->lastname;
            $email=$request->email;
            $password=$request->password;
            $passwd = Crypt::encryptString($password);
   
//     $rules = array(
//		'username' => 'required|min:5',
//        'lastname' => 'required|min:5',
//        'email' => 'required|email|unique:crs_admin_user,email'
//	);
//    

     $v = Validator::make($request->all(),$rules);
     
     if( $v->fails() ) {
        return $v->errors();
        } 

     else 
        { 
         
    $user=DB::insert('insert into crs_admin_user(username,lastname,email,password) values (?,?,?,?)',array ($username,$lastname,$email,$passwd)); 
        
    return response()->json(array(
            'error' => false,
            'products' => $user,
            'message'=>'data inserted successfully',
            'status_code' => 200
        ));
        }
   
    }
    
}
