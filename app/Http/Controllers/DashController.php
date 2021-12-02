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
    public function Profile()
    {
        return view('dash.profile');
    }  
    public function Consultaions()
    {
        return view('dash.consultations');
    }

}
