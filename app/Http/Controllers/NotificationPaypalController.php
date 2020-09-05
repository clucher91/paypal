<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NotificationPaypalController extends Controller
{
    public function store(Request $request)
    {
    	Log::debug($request->all());
    }
}
