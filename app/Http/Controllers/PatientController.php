<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients=Patient::all();
        
        return view('patients.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'image'=>'required|image|mimes:png,jpg,jpeg|max:2048',
        'N°Dossier' =>'required',
        'Nom' =>'required',
        'Prenom' =>'required',
        'Telephone' =>'required',
        'DateNai' =>'required',
        'address' =>'required',
        'Sexe'=>'required',
    
       ]);
       $input=$request->all();
       if($request->hasfile('image'))
       {
           $file = $request->file('image');
           $extention = $file->getClientOriginalExtension();
           $filename = time().'.'.$extention;
           $file->move('admin/img/', $filename);
           $input['image'] = $filename;
       }
     Patient::create($input);
       return redirect('/patients')->with('message', 'patient a été enregistré');
       
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patients = Patient::findOrFail($id);
    return view('patients/show',compact('patients'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patients = Patient::findOrFail($id);
        return view('patients/edit', compact('patients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image'=>'required|image|mimes:png,jpg,jpeg|max:2048',
            'N°Dossier' =>'required',
            'Nom' =>'required',
            'Prenom' =>'required',
            'Telephone' =>'required',
            'DateNai' =>'required',
            'address' =>'required',
            'Sexe'=>'required',
           
           ]);
           $input=$request->all();
           if($request->hasfile('image'))
           {
               $file = $request->file('image');
               $extention = $file->getClientOriginalExtension();
               $filename = time().'.'.$extention;
               $file->move('admin/img/', $filename);
               $input['image'] = $filename;
           }
           $patients=Patient::find($id);
          $patients->update($input);
           return redirect('/patients')->with('message', 'patient a été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patients = Patient::findOrFail($id);
        $patients->delete();
        return redirect('/patients')->with('message', 'patient a été supprimer');
    }
}