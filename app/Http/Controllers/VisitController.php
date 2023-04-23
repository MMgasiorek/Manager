<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\VisitRepository;
use App\Repositories\ClientRepository;
use App\Repositories\EmployeerRepository;
use App\Repositories\TattooRepository;
use App\Repositories\AccessoryRepository;
use App\Models\Accessory;
use App\Http\Requests\ValidationClass;

class VisitController extends Controller
{
    public function index(VisitRepository $visitRepo)
    {
        $visits = $visitRepo->getAll();

        return view('admin.studio.visits.list' , ['visits' => $visits]);
    }

    public function show(VisitRepository $visitRepo, int $id)
    {
        $visit = $visitRepo->find($id);

        return view('admin.studio.visits.profile' , ['visit' => $visit]);
    }

    public function store(ClientRepository $clientRepo, EmployeerRepository $employeerRepo, TattooRepository $tattooRepo)
    {
        $clients = $clientRepo->getAll();
        $employees = $employeerRepo->getAll();
        $tattoos = $tattooRepo->getAll();

        return view('admin.studio.visits.add' , compact('clients', 'employees', 'tattoos'));                                          
    }

    public function create(ValidationClass $request, AccessoryRepository $accessoryRepo, VisitRepository $visitRepo)
    {
        $request->validated();
        $visitRepo->create_new_visit($request);       
        $data = $accessoryRepo->get_fillable();

        $accessories = $accessoryRepo->getAll();
        $i = 0;
        foreach ($accessories as $item)
        {
            $item->amount = $item->amount - $request->input($data[$i]);
            $item->save();
            $i = $i++;
        }
        
        return back()->with('success','New visit added');
    }

    public function delete(VisitRepository $visitRepo, int $id) 
    {
        $visitRepo->delete($id);

        return back()->with('success','removed correctly');
    }

}

