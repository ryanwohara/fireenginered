<?php namespace FireEngineRed\Http\Controllers;

use FireEngineRed\Http\Requests; use FireEngineRed\Http\Controllers\Controller;

use Illuminate\Http\Request; use DB;

class ApiController extends Controller {

	public function show()
	{
		return DB::table('workouts')->get();;
	}

	public function add(Request $request)
	{
		return $request;
		DB::table('workouts')->insert(['amount' => $request->amount, 'weight' => $request->add, 'description' => $request->description]);
		return "{'success': 1}";
	}

	public function del($id)
	{
		//
	}
}
