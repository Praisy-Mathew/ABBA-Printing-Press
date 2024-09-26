<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Quality;
use App\Models\Client;
use App\Models\Service;



class AdminController extends Controller
{
  public function index()
  { 
    $servicesCount = Service::count();
    $teamsCount = Team::count();
    $qualitiesCount = Quality::count();
    $clientsCount = Client::count();
    $testimonialsCount = Testimonial::count();
    $contactsCount = Contact::count();

    // Pass the counts to the view
    return view('admin.index', compact(
        'servicesCount', 
        'teamsCount', 
        'qualitiesCount', 
        'clientsCount', 
        'testimonialsCount',
        'contactsCount'
    ));
  }
  public function teams()
{
    $teams = Team::all(); // Assuming you have a Team model for the 'teams' table
    return view('admin.team', compact('teams')); // Adjust the view path as needed
}
 
  public function quality()
  {
    $qualities = Quality::all();
    return view('admin.quality', compact('qualities') );
  }
  public function clients()
  { 
    $clients = Client::all();
    return view('admin.clients', compact('clients'));

  }
  public function services()
  { 
    $services = Service::all();
    return view('admin.services', compact('services'));
  }
  
  public function Testimonials()
{
    $testimonials = Testimonial::all();
    return view('admin.testimonials', compact('testimonials'));
}

  public function contact()
    {
        $contacts = Contact::all();
        return view('admin.contact', compact('contacts'));
    }
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Contact message deleted successfully!');
    }


    public function teamStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'required|string|max:255',
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('images/team', 'public');
            $validatedData['photo'] = $photoPath;
        }

        Team::create($validatedData);

        return redirect()->back()->with('success', 'Team member added successfully.');
    }

    // Update an existing team member
    public function teamUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'required|string|max:255',
        ]);

        $team = Team::findOrFail($id);
        $team->name = $request->name;
        $team->department = $request->department;
        $team->location = $request->location;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('teams', 'public');
            $team->photo = $photoPath;
        }
        $team->save();

        return redirect()->back()->with('success', 'Team member updated successfully.');
    }

    // Delete a team member
    public function teamDestroy($id)
       {
        $team= Team::findOrFail($id);
         $team->delete();

        return redirect()->back()->with('success', 'Team member deleted successfully.');
    }

     
   

    public function qualityStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('qualities', 'public');
            $validatedData['image'] = $imagePath;
        }

        Quality::create($validatedData); // Store data in the database

        return redirect()->back()->with('success', 'Quality added successfully.');
    }

     public function qualityUpdate(Request $request, $id)
    {     
          $quality = Quality::findOrFail($id);
          $validatedData = $request->validate([
           'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
       ]);

       //$quality = Quality::findOrFail($id);
       $quality->title = $request->title;
       $quality->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('qualities', 'public');
            $quality->image = $imagePath;
        }

         $quality->save(); // Update the database

        return redirect()->back()->with('success', 'Quality updated successfully.');
    }

    public function qualityDestroy($id)
     {
         $quality = Quality::findOrFail($id);
        $quality->delete(); // Delete the record

         return redirect()->back()->with('success', 'Quality deleted successfully.');
    }


    
    
    public function clientStore(Request $request)
    {
        $request->validate([
            'client_sector' => 'required|string|max:255',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp,avif|max:2048',
            'sub_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp,avif|max:2048',
        ]);
    
        // Store images
        $mainImage = $request->file('main_image')->store('clients', 'public');
        $subImage = $request->file('sub_image')->store('clients', 'public');
    
        // Create client record
        Client::create([
            'client_sector' => $request->client_sector,
            'main_image' => $mainImage,
            'sub_image' => $subImage,
        ]);
    
        return redirect()->back()->with('success', 'Client added successfully!');
    }
    public function clientUpdate(Request $request, $id)
    {
        $client = Client::findOrFail($id);
    
        $request->validate([
            'client_sector' => 'required|string|max:255',
            'main_image' => 'image|mimes:jpeg,png,jpg,gif,webp,avif|max:2048',
            'sub_image' => 'image|mimes:jpeg,png,jpg,gif,webp,avif|max:2048',
        ]);
    
        // Update client sector
        $client->client_sector = $request->client_sector;
    
        // Update main image if uploaded
        if ($request->hasFile('main_image')) {
            $mainImage = $request->file('main_image')->store('clients', 'public');
            $client->main_image = $mainImage;
        }
    
        // Update sub image if uploaded
        if ($request->hasFile('sub_image')) {
            $subImage = $request->file('sub_image')->store('clients', 'public');
            $client->sub_image = $subImage;
        }
    
        $client->save();
    
        return redirect()->back()->with('success', 'Client updated successfully!');
    }
    public function clientDestroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
    
        return redirect()->back()->with('success', 'Client deleted successfully!');
    }

    public function testimonialsStore(Request $request)
    {   
        $validatedData = $request->validate([
            'author' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        Testimonial::create($validatedData);
    
        return redirect()->back()->with('success', 'Testimonial added successfully.');
    }
    
    public function testimonialsUpdate(Request $request, $id)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->author = $request->author;
        $testimonial->content = $request->content;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonials', 'public');
            $testimonial->image = $imagePath;
        }
        $testimonial->save();

        return redirect()->back()->with('success', 'Testimonial updated successfully.');
    }

    public function testimonialsDestroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->back()->with('success', 'Testimonial deleted successfully.');
    }
             
    public function serviceStore(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('services', 'public');
            $validatedData['photo'] = $photoPath;
        }

        Service::create($validatedData);
        return redirect()->back()->with('success', 'Service added successfully.');
    }

    // Update an existing service
    public function serviceUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $service = Service::findOrFail($id);
        $service->title = $request->title;
        $service->description = $request->description;

        // Handle file upload
        if ($request->hasFile('photo')) {
            if ($service->photo) {
                \Storage::disk('public')->delete($service->photo);
            }

            $photoPath = $request->file('photo')->store('services', 'public');
            $service->photo = $photoPath;
        }

        $service->save();
        return redirect()->back()->with('success', 'Service updated successfully.');
    }

    // Delete a service
    public function serviceDestroy($id)
    {
        $service = Service::findOrFail($id);

        // Delete photo if exists
        if ($service->photo) {
            \Storage::disk('public')->delete($service->photo);
        }

        $service->delete();
        return redirect()->back()->with('success', 'Service deleted successfully.');
    }

    // Toggle visibility
    public function toggleVisibility($id)
    {
        $service = Service::findOrFail($id);
        $service->status = !$service->status;
        $service->save();

        return redirect()->back()->with('success', 'Service status updated.');
    }

}
