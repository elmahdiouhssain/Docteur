<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Apointment;
use App\Models\clients;
use App\Models\consultations;
use App\Models\ordonnances;

use Session;
use Hash;

class DashController extends Controller
{
    //
    public function DashIndex()
    {
        return view('dash.index');
    }  
    ////////Patient ection//////////
    public function Patient()
    {
        $data = array();
	    $data['patients'] = clients::all();
        return view('dash.patient')->withData($data);
    }
    public function NewPatient(Request $request)
    {
     
            $pack = new clients();
            $pack->fullname = $request->input('fullname');
            $pack->email = $request->input('email');
            $pack->tele = $request->input('tele');
            $pack->addr = $request->input('addr');
            $pack->cin = $request->input('cin');
            $pack->date = $request->input('date');
            $pack->genre = $request->input('genre');

            $pack->save();
          return redirect('/patients')->with('success', 'Le client ajouter avec succeé');

        return view('dash.patient')->withData($data);
    }
    public function delClient($id) {

		$pack = clients::find($id);
		$pack->delete();

		return redirect('/patients')->with('success', 'Le client supprimé avec succée');

    }
    public function showClient($id) {
        $pack = DB::select('select * from clients where id ='.$id);
        return view('dash.showclient',['pack'=>$pack]);
    
       }
    public function editPatient(Request $request,$id) {

        $fullname = $request->input('fullname');
        $cin = $request->input('cin');
        $addr = $request->input('addr');
        $tele = $request->input('tele');
        $genre = $request->input('genre');
        $date = $request->input('date');

    DB::update('update clients set fullname=?,cin=?,addr=?,tele=?,genre=?,date=? where id = ?',[$fullname,$cin,$addr,$tele,$genre,$date,$id]);
    return redirect('/patients')->with('success', 'Le client est Modifier avec succée');

    }
    
    ////////Patient ection//////////

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
        $data = array();
	    $data['consultations'] = consultations::all();
        return view('dash.consultations')->withData($data);
    }
    public function Newconsultation(Request $request)
    {
       
            $pack = new ordonnances();
            $pack->fullname = $request->input('fullname');
            $pack->cin = $request->input('cin');
            $pack->traitment = $request->input('traitment');
            $pack->observation = $request->input('observation');
            $pack->usage = $request->input('usage');
            $pack->date_traitment = $request->input('date_traitment');


            $pack->save();
          return redirect('/ordonnance')->with('success', 'L ordonnance ajouter avec succeé');

        return view('dash.consultations')->withData($data);
    }
    public function delCons($id) {

		$pack = consultations::find($id);
		$pack->delete();

		return redirect('/consultation')->with('success', 'La consultation supprimé avec succeé');
    }
    public function showCons($id) {
        $rev = DB::select('select * from consultations where id ='.$id);
        return view('dash.showcons',['rev'=>$rev]);
    
       }
    public function editCons(Request $request,$id) {

        $fullname = $request->input('fullname');
        $cin = $request->input('cin');
        $poid = $request->input('poid');
        $operation = $request->input('operation');
        $prix = $request->input('prix');
        $date_operation = $request->input('date_operation');
        $observation = $request->input('observation');

    DB::update('update consultations set fullname=?,cin=?,poid=?,operation=?,prix=?,date_operation=?,observation=? where id = ?',[$fullname,$cin,$poid,$operation,$prix,$date_operation,$observation,$id]);
    return redirect('/consultation')->with('success', 'La consultation est Modifier avec succée');

    }
    /////////////End consultaition section ////////
    /////////////start ordonnance section ////////
    public function Ordonnance()
    {
        return view('dash.ordonance');
    }
    public function NewOrdonnance(Request $request)
    {
        $data = array();
	    $this->validate($request, [
            'fullname' => 'required|min:2',
            //'cin' => 'required',
            'operation' => 'required',
            'date_operation' => 'required',


            //'observation' => 'required',

         ]);
            $pack = new consultations();
            $pack->fullname = $request->input('fullname');
            $pack->cin = $request->input('cin');
            $pack->poid = $request->input('poid');
            $pack->operation = $request->input('operation');
            $pack->prix = $request->input('prix');
            $pack->date_operation = $request->input('date_operation');
            $pack->observation = $request->input('observation');

            $pack->save();
          return redirect('/consultation')->with('success', 'La consultaion ajouter avec succeé');

        return view('dash.consultations')->withData($data);
    }

    /////////Rende-vous section////////
    public function Rendezvous()
    {
        $data = array();
	    $data['rendezvous'] = Apointment::all();

        return view('dash.rendezvous')->withData($data);
    }
    public function NewRendezvous(Request $request)
    {
        $data = array();
	    $this->validate($request, [
            //'fullname' => 'required|min:2',
            //'cin' => 'required',
            'title' => 'required',
            'start' => 'required',
            'end' => 'required',

            //'observation' => 'required',

         ]);
            $pack = new Apointment();
            $pack->fullname = $request->input('fullname');
            $pack->cin = $request->input('cin');
            $pack->title = $request->input('title');
            $pack->start = $request->input('start');
            $pack->end = $request->input('end');
            $pack->observation = $request->input('observation');

            $pack->save();
          return redirect('/rendez-vous')->with('success', 'Le rendez-vous ajouter avec succeé');

        return view('dash.rendezvous')->withData($data);
    }
    public function delRev($id) {

		$pack = Apointment::find($id);
		$pack->delete();

		return redirect('/rendez-vous')->with('success', 'Le rendez-vous supprimé avec succeé');
    }
    public function showRev($id) {
        $rev = DB::select('select * from apointments where id ='.$id);
        return view('dash.showrev',['rev'=>$rev]);
    
       }
    public function editRev(Request $request,$id) {

        $fullname = $request->input('fullname');
        $cin = $request->input('cin');
        $title = $request->input('title');
        $start = $request->input('start');
        $end = $request->input('end');
        $observation = $request->input('observation');

    DB::update('update apointments set fullname=?,cin=?,title=?,start=?,end=?,observation=? where id = ?',[$fullname,$cin,$title,$start,$end,$observation,$id]);
    return redirect('/rendez-vous')->with('success', 'Le Rendez-vous est Modifier avec succée');

    }
    /////////End Rende-vous section////////

    public function DroiAccess()
    {
        $data = array();
	    $data['allusers'] = User::all();
        return view('dash.access')->withData($data);
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
