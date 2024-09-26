<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Quality;
use App\Models\Client;
use App\Models\Service;


class BaseController extends Controller
{
    public function index()
        {
            $teams = Team::all(); 
            $testimonials = Testimonial::all();
            $services = Service::where('status',1)->get();
            return view('user.index',compact('teams','testimonials','services'));
        }
    public function home()
        {
            return view('user.home');
        }   
    public function about()
        {
            return view('user.about');
        }
    public function services1()
        {
            $services = Service::all();
            return view('user.services1', compact('services'));
        } 
    public function qualities ()
        {
            $qualities = Quality::all();
            return view('user.qualities', compact('qualities'));
        
        }    
    public function clients()
        {   
            $clients = Client::all();
            return view('user.clients', compact('clients'));
        } 
    public function associates()
        {
            return view('user.associates');
        } 
    public function contact()
        {
            return view('user.contact');
        } 
        public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'phone' => 'required|string|max:20', // Adjust max length as needed
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Create a new contact message in the database
    Contact::create($validatedData);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Contact form submitted successfully!');
}
       
}   
