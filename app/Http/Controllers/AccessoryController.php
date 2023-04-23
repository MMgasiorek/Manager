<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AccessoryRepository;
use App\Models\Accessory;
use App\Http\Requests\ValidationClass;

class AccessoryController extends Controller
{
    public function index(AccessoryRepository $accessoryRepo)
    {
        $accessories = $accessoryRepo->getAll();

        return view('admin.studio.accessories.list' , ['accessories' => $accessories]);
    }

    public function create(ValidationClass $request)
    {
        $request->validated();

        $accessory = new Accessory; 
        $accessory->name =              $request->input('name');
        $accessory->amount =            $request->input('amount');
        $accessory->safety_level =      $request->input('safety_level');
        $accessory->save();

        return back()->with('success','New accessories added');
    }

    public function edit(AccessoryRepository $accessoryRepo, int $id)
    {
        $accessory = $accessoryRepo->find($id);

        return view('admin.studio.accessories.edit' , ['accessory' => $accessory]);
    }

    public function update(AccessoryRepository $accessoryRepo, Request $request)
    {
        $accessory = $accessoryRepo->find($request->input('id'));
        $accessory->amount =  $request->input('amount');
        $accessory->save();

        return back()->with('success','Edited correctly');
    }

    public function delete(AccessoryRepository $accessoryRepo, int $id) 
    {
        $accessoryRepo->delete($id);

        return back()->with('success','Removed correctly');
    }
}
