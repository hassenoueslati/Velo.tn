<?php

namespace App\Http\Controllers;

use App\Models\Velo;
use Illuminate\Http\Request;

class VeloController extends Controller
{
    public function index()
    {
        $velos = velo::all();
        return view ('velos.index')->with('velos', $velos);
    }
 
    
    public function create()
    {
        return view('velos.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Velo::create($input);
        return redirect('velo')->with('flash_message', 'velo Addedd!');  
    }
 
    
    public function show($id)
    {
        $velo = Velo::find($id);
        return view('velos.show')->with('velos', $velo);
    }
 
    
    public function edit($id)
    {
        $velo = velo::find($id);
        return view('velos.edit')->with('velos', $velo);
    }
 
  
    public function update(Request $request, $id)
    {
        $velo = Velo::find($id);
        $input = $request->all();
        $velo->update($input);
        return redirect('velo')->with('flash_message', 'velo Updated!');  
    }
 
  
    public function destroy($id)
    {
        Velo::destroy($id);
        return redirect('velo')->with('flash_message', 'velo deleted!');  
    }
}

