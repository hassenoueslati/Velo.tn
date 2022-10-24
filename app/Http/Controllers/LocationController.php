<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Velo;



class LocationController extends Controller
{
    public function index()
    {
        $locations = location::all();
        $velos = velo::all();
 
        return view ('locations.index')->with('locations', $locations, 'velos', $velos);
    }
 
    
    public function create()
    {
        return view('locations.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Location::create($input);
        return redirect('location')->with('flash_message', 'location Addedd!');  
    }
 
    
    public function show($id)
    {
        $velo = velo :: all();
        $location = Location::find($id);
        return view('locations.show')->with('locations', $location, 'velos', $velo);
    }
 
    
    public function edit($id)
    {
        $location = location::find($id);
        return view('locations.edit')->with('locations', $location);
    }
 
  
    public function update(Request $request, $id)
    {
        $location = location::find($id);
        $input = $request->all();
        $location->update($input);
        return redirect('location')->with('flash_message', 'location Updated!');  
    }
    
 
  
    public function destroy($id)
    {
        Location::destroy($id);
        return redirect('location')->with('flash_message', 'location deleted!');  
    }

}

