<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\User;
use DB;

class AdminController extends Controller
{
    public function admin(){
        return view('website.admin.admin');
    }
    public function table(){
        $patients = Patient::all();
        return view('website.admin.table', compact('patients'));
    }
    public function edit($id){
        $patient = Patient::find($id);
        return view('website.admin.edit', compact('patient'));
    }

    public function update(Request $r, $id){
        $obj = Patient::find($id);
        $obj->name = $r->name;
        $obj->email =  $r->email;
        $obj->phone =  $r->phone;
        $obj->birthday =  $r->birthday;
        //$obj->gender =  $r->gender;
        $obj->blood_group =  $r->blood_group;
        $obj->save();

        return redirect()->to('/table')->with('msg', 'Updated Successfully');
    }
    public function delete($id){
        DB::table('patients')->where('id', '=', $id)->delete();
        return redirect()->back()->with('msg', 'Successfully Deleted');
    }

    public function login(){
        return view('website.forms.login');
    }

    public function loginstore(Request $r){
        
        $email = $r->email;
        $password = $r->password;

        $user = User::where('email','=',$email)
            ->where('password','=',$password)
            ->first();
        if(!$user){
            return redirect()->back()->with('err_mssg', 'Invalid email or password');
        }
        else {
            //store user data into seesion
            $r->session()->put('username', $user->name);
            $r->session()->put('useremail', $user->email);
            $r->session()->put('userrole', $user->role);

            return redirect()->to('/admin');
            }
    }

    public function logout(){
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }

    
}