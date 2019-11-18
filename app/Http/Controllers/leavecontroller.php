<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\leave;

class leavecontroller extends Controller
{
    //
    public function approveleave()
    {
    	 $title='Leave Mangment';
        $leave=leave::paginate(2);
        return view('leave.approveleave',compact('leave'));

    	 
    }
}
