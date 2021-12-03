<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Apointment;

use Session;
use Hash;

class DashController extends Controller
{
    //
    public function DashIndex()
    {
        return view('dash.index');
    }  
    public function Patient()
    {
        return view('dash.patient');
    }
    public function Historique()
    {
        return view('dash.histo');
    }



    public function Profile() {
        $data['title'] = "Doctorv1 Profile";
        return view('dash.profile',compact('data'));
    }

    public function admin_credential_rules(array $data){
    $messages = [
        'current-password.required' => 'Please enter current password',
        'password.required' => 'Please enter password',
    ];

    $validator = Validator::make($data, [
        'current-password' => 'required',
        'password' => 'required|same:password',
        'password_confirmation' => 'required|same:password',     
    ], $messages);

    return $validator;
    }  
    public function postCredentials(Request $request){
    if(Auth::Check()){
      $request_data = $request->All();
      $validator = $this->admin_credential_rules($request_data);
      if($validator->fails()){
        return redirect('/profile')->with('danger', 'Mot de pass erroné !');
      }else{  
        $current_password = Auth::User()->password;
        if(Hash::check($request_data['current-password'], $current_password)){   
        $user_id = Auth::User()->id;
        $obj_user = User::find($user_id);
        $obj_user->password = Hash::make($request_data['password']);
        $obj_user->save(); 
        return redirect('/profile')->with('success', 'Mot de passe changé avec succeé');

      }else{  

        return redirect('/profile')->with('warning', 'Ancien mot de passe erroné!');   
      }
      }        
      }else{
    return redirect()->to('/');
  }    
  }  
    public function Consultaions()
    {
        return view('dash.consultations');
    }
    public function Ordonnance()
    {
        return view('dash.ordonance');
    }
    public function Rendezvous()
    {
        $data = array();
	    $data['rendezvous'] = Apointment::all();

        return view('dash.rendezvous')->withData($data);
    }
    public function DroiAccess()
    {
        return view('dash.access');
    }
    public function Medicaments()
    {
        return view('dash.medicaments');
    }
    public function Payments()
    {
        return view('dash.payments');
    }
    public function Analyse()
    {
        return view('dash.analyse');
    }
    public function Radiologie()
    {
        return view('dash.radiologie');
    }


}
