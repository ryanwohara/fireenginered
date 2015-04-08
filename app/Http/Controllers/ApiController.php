<?php namespace FireEngineRed\Http\Controllers;

use FireEngineRed\Http\Requests;
use FireEngineRed\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class ApiController extends Controller {

	public function getItems()
	{
		return DB::table('workouts')->get();
	}

	public function show()
	{
		return getItems();
	}

	public function add(Request $request)
	{
		DB::table('workouts')->insert(['amount' => $request->amount, 'weight' => $request->add, 'description' => $request->description]);
	}

	public function del($id)
	{
		//
	}
}
