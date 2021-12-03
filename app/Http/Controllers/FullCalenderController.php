<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apointment;

class FullCalenderController extends Controller
{
    public function index(Request $request)
    {
    	if($request->ajax())
    	{
    		$data = Apointment::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
    	}
    	return view('dash.index');
    }

    public function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->type == 'add')
    		{
    			$event = Apointment::create([
    				'title'		=>	$request->title,
                    'fullname' =>	$request->fullname,
                    'cin' =>	$request->cin,
                    'observation' =>	$request->observation,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'update')
    		{
    			$event = Apointment::find($request->id)->update([
    				'title'		=>	$request->title,
                    'fullname' =>	$request->fullname,
                    'cin' =>	$request->cin,
                    'observation' =>	$request->observation,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'delete')
    		{
    			$event = Apointment::find($request->id)->delete();

    			return response()->json($event);
    		}
    	}
    }
}
