<?php namespace FireEngineRed\Http\Controllers;

use FireEngineRed\Http\Requests;
use FireEngineRed\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ResourceController extends Controller {

	public function js()
	{
		return view('js');
	}

}
