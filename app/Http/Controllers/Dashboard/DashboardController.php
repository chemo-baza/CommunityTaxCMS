<?php

namespace App\Http\Controllers\Dashboard;

use App\Sms\SmsNumber;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_list = SmsNumber::all();
        return view('dashboard.index', compact('my_list'))->with('page_title', 'Database Summary')
                                         ->with('page_description', 'You can see a brief summary of our records');;
    }
}
