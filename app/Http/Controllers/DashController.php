<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
    public function Profile()
    {
        return view('dash.profile');
    }  
    public function Consultaions()
    {
        return view('dash.consultations');
    }
    public function Ordonnance()
    {
        return view('dash.ordonance');
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
