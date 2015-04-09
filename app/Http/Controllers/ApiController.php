<?php namespace FireEngineRed\Http\Controllers;

use FireEngineRed\Http\Requests;
 use FireEngineRed\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

use DB;
use \DateTime;

class ApiController extends Controller {

	public function show()
	{
		return DB::table('workouts')->get();
	}

	public function add(Request $request)
	{
		DB::table('workouts')->insert(['amount' => $request->amount, 'weight' => $request->weight, 'description' => $request->description, 'created_at' => new DateTime, 'updated_at' => new DateTime, 'active' => 1]);
		return response("", 200)
	              ->header('Location', '/');
	}

	public function del($id)
	{
		DB::table('workouts')->where(['id' => $id])->update(['active' => 0]);
		return response("", 200)
	              ->header('Location', '/');
	}

	public function edit(Request $request)
	{
 		DB::table('workouts')->where('id', $request->id)->update(['amount' => $request->amount, 'weight' => $request->weight, 'description' => $request->description, 'updated_at' => new DateTime, 'active' => 1]);
		return response("", 200)
			->header('Location', '/');
	}
}
