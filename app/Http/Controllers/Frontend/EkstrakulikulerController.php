<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller as CoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EkstrakulikulerController extends CoreController
{
	public function index()
	{
		return view('contents.frontend.ekstrakulikuler');
	}
}