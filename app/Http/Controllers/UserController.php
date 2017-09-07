<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Cookie;

class UserController extends Controller
{
    
//User Admin
    
    public function index(){
        
    $users = DB::table('crs_admin_user')->get();
    return response()->json($users);
    }
    
    public function show($id)
        
    {
    $user=DB::select("select * from crs_admin_user where id='$id';");
        
    return response()->json(array(
            'error' => false,
            'products' => $user,
            'message'=>'data listed successfully',
            'status_code' => 200
        ));
    }
    
   
    public function deleteuser($id){
        
    $res=DB::table('crs_admin_user')->where('id', $id)->delete();
    //$res=DB::delete("delete from crs_admin_user where id='$id';");
        
     return response()->json(array(
            'error' => false,
            'products' => $res,
            'message'=>'data deleted successfully',
            'status_code' => 200
        ));
    }
    
    public function update(request $request,$id){
        
    $username=$request->username;
    $lastname=$request->lastname;
    $email=$request->email;
    $password=$request->password;
    $passwd = Crypt::encryptString($password);
        
    $res=DB::update('update crs_admin_user set username = ?,lastname=?,email=?,password=? where id = ? ',[$username,$lastname,$email,$passwd,$id]);
        
    return response()->json(array(
            'error' => false,
            'products' => $res,
            'message'=>'data updated successfully',
            'status_code' => 200
        ));    }
    
// Create user   
    
    public function createUser(request $request){
        
    $firstname=$request->firstname;
    $lastname=$request->lastname;
    $email=$request->email;
    $password=$request->password;
    $passwd = Crypt::encryptString($password);
      
        $cookie = Cookie::make('email', '$email', 60);
   echo $cookie; 
    $user=DB::insert('insert into user_login(firstname,lastname,email,password) values (?,?,?,?)',array ($firstname,$lastname,$email,$passwd));  
        
    return response()->json(array(
            'error' => false,
            'products' => $user,
            'message'=>'Login created successfully',
            'status_code' => 200
        ));
    }
    public function userlogin(request $request){
    //$request->session()->put('KEY', 'VALUE');
    $email=$request->email;
    $password=$request->password;
    $passwd = Crypt::encryptString($password);
        
    //$res=DB::select(DB::raw('select * from user_login where email="$email" AND password="$passwd"'));
        
    $res = DB::table('user_login')->where(['email' => $email],['password' => $passwd])->get();
        
        return $res;die;
         
 
//        if($res){
//             return response()->json(array(
//            'error' => false,
//            'products' => $res,
//            'message'=>'Logged successfully',
//            'status_code' => 200
//        )); 
//            }
//            else
//            {
//                return "false";
//            }
        
      
    }

//user role
    
    public function addrole(request $request){
        
    $rolename=$request->role_name; 
        
    $user=DB::insert('insert into user_role(role_name) values (?)',array ($rolename)); 
        
    return response()->json(array(
            'error' => false,
            'products' => $user,
            'message'=>'data inserted successfully',
            'status_code' => 200
        ));     }
 
    
// profile details
    
    public function userprofile(request $request){
        
    $username=$request->username;
    $organization=$request->organization;
    $omobile=$request->org_mobile_no;
    $landline=$request->landline_no;
    $uaddress=$request->address;
    $uemail=$request->user_email;
    $umobile=$request->user_mobile_no;

    $user=DB::insert('insert  into user_profile_details(username,organization,org_mobile_no,landline_no,address,user_email,user_mobile_no) values (?,?,?,?,?,?,?)',array ($username,$organization,$omobile,$landline,$uaddress,$uemail,$umobile));
    
    return response()->json(array(
            'error' => false,
            'products' => $user,
            'message'=>'data inserted successfully',
            'status_code' => 200
        ));    
    }
    
    public function getprofile(){ 
        
    $res = DB::table('user_profile_details')->get();
        
    return response()->json(array(
            'error' => false,
            'products' => $res,
            'message'=>'Profile datas listed successfully',
            'status_code' => 200
        ));    
    }
    
    public function getoneprofile($id)
        
    {
    
    $res=DB::select("select * from user_profile_details where user_id='$id';"); 
        
    return response()->json(array(
            'error' => false,
            'products' => $res,
            'message'=>'Profile data listed successfully',
            'status_code' => 200
        ));
    }
}
