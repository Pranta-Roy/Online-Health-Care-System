<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    public function registration(){
        return view('website.forms.registration');
    }

    public function patient(){
        return view('website.patient.patient');
    }

    public function store(Request $r){

        $obj = new Patient();

        $obj->name = $r->name;
        $obj->password = $r->password;
        $obj->email =  $r->email;
        $obj->phone =  $r->phone;
        $obj->birthday =  $r->birthday;
        $obj->gender =  $r->gender;
        $obj->blood_group =  $r->blood_group;
        $obj->save(); // Eloquent ORM

        return redirect()->to('/loginpatient');

    }

    


    public function loginP(Request $r){
        
        $email = $r->email;
        $password = $r->password;

        $patient = Patient::where('email','=',$email)
            ->where('password','=',$password)
            ->first();
        if(!$patient){
            return redirect()->back()->with('err_mssg', 'Invalid email or password');
        }
        else {
            //store user data into seesion
            $r->session()->put('username', $patient->name);
            $r->session()->put('useremail', $patient->email);

            return redirect()->to('/patient');
            }
    }

    public function loginpatient(){
        return view('website.forms.loginpatient');
    }

}
