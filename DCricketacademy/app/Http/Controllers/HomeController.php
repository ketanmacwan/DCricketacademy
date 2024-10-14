<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;  // Corrected namespace for Event model
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){
                return view('Home');
            }

            elseif($usertype == 'admin'){
                return view('admin.adminhome');
            }

            elseif($usertype == 'subadmin'){
                return view('admin.subadmin');
            }

            else{
                return redirect()->back();
            }
        }
    }

    public function dashboard()
    {
        return view ("dashboard");
    }


    public function contact()
    {
        return view ("contact");
    }

    public function why()
    {
        return view ("why");
    }

    public function trainer()
    {
        return view ("trainer");
    }

    public function about()
    {
        return view ("about");
    }

    public function post()
    {
        return view ("post");
    }


    public function event_page()
    {
        return view('admin.event_page');
    }

    public function add_event(Request $request)
    {
        $event = new Event;

        $event->eventname = $request->eventname;
        $event->organizationname = $request->organizationname;
        $event->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(('eventimages'), $imageName);
            $event->image = $imageName; // Save the image name to the database
        }

        $event->save();

        return redirect()->back()->with('success', 'Event added successfully.');
    }
}
