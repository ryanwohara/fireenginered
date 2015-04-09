<?php namespace FireEngineRed\Http\Controllers;

use FireEngineRed\Http\Requests; use FireEngineRed\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use Illuminate\Support\Facades\Session;
use \DateTime;

class ApiController extends Controller {

	public function show()
	{
		return DB::table('workouts')->get();;
	}

	public function add(Request $request)
	{
		DB::table('workouts')->insert(['amount' => $request->amount, 'weight' => $request->weight, 'description' => $request->description, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
		return response("", 200)
	              ->header('Location', '/');
	}

	public function del($id)
	{
		DB::table('workouts')->delete(['id' => $id]);
		return response("", 200)
	              ->header('Location', '/');
	}
}
