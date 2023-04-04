<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TattooRepository;
use App\Repositories\VisitRepository;
use App\Models\Tattoo;

class TattooController extends Controller
{
    public function index(TattooRepository $tattooRepo)
    {
        $tattoos = $tattooRepo->getAll();

        return view('admin.studio.tattoos.list' , ['tattoos' => $tattoos]);
    }

    public function show(TattooRepository $tattooRepo, $id)
    {
        $tattoo = $tattooRepo->find($id);

        return view('admin.studio.tattoos.profile' , ['tattoo' => $tattoo]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'picture_number'=> 'required',
        ]);

        $tattoo = new Tattoo;
        
        $imageName = $request->input('picture_number').'.'.$request->image->extension();
        $tattoo->name =             $request->input('name');
        $tattoo->picture_number =   $request->input('picture_number');
        $request->image->move(public_path('img/tattoos/'), $imageName);

        $tattoo->save();

        return back()->with('success','New Tattoo added')->with('image', $imageName);
    }

    public function edit(TattooRepository $tattooRepo, $id)
    {
        $tattoo = $tattooRepo->find($id);

        return view('admin.studio.tattoos.edit' , ['tattoo' => $tattoo]);
    }

    public function update(TattooRepository $tattooRepo, Request $request)
    {
        $tattoo = $tattooRepo->find($request->input('id'));

        $tattoo->name = $request->input('name');
        $tattoo->picture_number = $request->input('picture_number');

        $tattoo->save();

        return back()->with('success','Edited correctly');
    }

    public function delete(TattooRepository $tattooRepo, $id) 
    {
        $tattoo = $tattooRepo->delete($id);

        return back()->with('success','Removed correctly');
    }
}
