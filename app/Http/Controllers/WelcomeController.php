<?php namespace FireEngineRed\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Form;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = DB::table('workouts')->where(['active' => 1])->get();

		return view('api', compact('items'));
	}

}
