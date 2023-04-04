<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EmployeerRepository;
use App\Repositories\VisitRepository;
use App\Models\Employeer;
use App\Models\Visit;

class EmployeerController extends Controller
{
    public function index(EmployeerRepository $employeerRepo)
    {
        $employees = $employeerRepo->getAll();

        return view('admin.studio.employees.list' , ['employees' => $employees]);
    }

    public function show(EmployeerRepository $employeerRepo, VisitRepository $visitRepo, $id)
    {
        $employeer = $employeerRepo->find($id);
        $visits = $visitRepo->visits_list_by_employeer($id);
        $total_tattoo = count($visits);
        $total_money = $visitRepo->total_amount_by_employeer($id);
        $total_time = $visitRepo->total_time_by_employeer($id);

        return view('admin.studio.employees.profile' , ['employeer' => $employeer ,
                                                        'visits' => $visits ,
                                                        'total_tattoo' => $total_tattoo ,
                                                        'total_money' => $total_money ,
                                                        'total_time' => $total_time]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'surname'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
        ]);

        $employeer = new Employeer;
        
        $employeer->name =     $request->input('name');
        $employeer->surname =  $request->input('surname');
        $employeer->email =    $request->input('email');
        $employeer->phone =    $request->input('phone');

        $employeer->save();

        return back()->with('success','New employeer added');
    }

    public function edit(EmployeerRepository $employeerRepo, $id)
    {
        $employeer = $employeerRepo->find($id);

        return view('admin.studio.employees.edit' , ['employeer' => $employeer]);
    }

    public function update(EmployeerRepository $employeerRepo, Request $request)
    {
        $employeer = $employeerRepo->find($request->input('id'));

        $employeer->name = $request->input('name');
        $employeer->surname = $request->input('surname');
        $employeer->email = $request->input('email');
        $employeer->phone = $request->input('phone');

        $employeer->save();

        return back()->with('success','Edited correctly');
    }

    public function delete(EmployeerRepository $employeerRepo, $id) 
    {
        $employeer = $employeerRepo->delete($id);

        return back()->with('success','Removed correctly');
    }
}
