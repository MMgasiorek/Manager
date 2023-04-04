<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\VisitRepository;
use App\Repositories\ClientRepository;
use App\Repositories\EmployeerRepository;
use App\Repositories\TattooRepository;
use App\Repositories\AccessoryRepository;
use App\Models\Visit;

class VisitController extends Controller
{
    public function index(VisitRepository $visitRepo)
    {
        $visits = $visitRepo->getAll();

        return view('admin.studio.visits.list' , ['visits' => $visits]);
    }

    public function show(VisitRepository $visitRepo, $id)
    {
        $visit = $visitRepo->find($id);

        return view('admin.studio.visits.profile' , ['visit' => $visit]);
    }

    public function add(ClientRepository $clientRepo, EmployeerRepository $employeerRepo, TattooRepository $tattooRepo)
    {
        $clients = $clientRepo->getAll();
        $employees = $employeerRepo->getAll();
        $tattoos = $tattooRepo->getAll();

        return view('admin.studio.visits.add' , ['clients' => $clients,
                                                 'employees' => $employees,
                                                 'tattoos' => $tattoos]);
    }

    public function create(Request $request, VisitRepository $visitRepo, AccessoryRepository $accessoryRepo)
    {
        $request->validate([
            'client'=> 'required',
            'employeer'=> 'required',
            'tattoo'=> 'required',
            'amount'=> 'required',
            'date'=> 'required',
            'time'=> 'required',         
        ]);

        $visit = new Visit;
        
        $visit->client_id =              $request->input('client');
        $visit->employeer_id =           $request->input('employeer');
        $visit->tattoo_id =              $request->input('tattoo');
        $visit->amount =                 $request->input('amount');
        $visit->date =                   $request->input('date');
        $visit->time =                   $request->input('time');

        $visit->consume_needle =                   $request->input('consume_needle');
        $visit->consume_mask =                   $request->input('consume_mask');
        $visit->consume_ink =                    $request->input('consume_ink');
        $visit->consume_glove =                  $request->input('consume_glove');
        $visit->consume_liquid =                 $request->input('consume_liquid');
        $visit->consume_healing =                $request->input('consume_healing');
        $visit->consume_soap =                   $request->input('consume_soap');
        $visit->consume_anesthesia =             $request->input('consume_anesthesia');
        $visit->consume_calque =                 $request->input('consume_calque');
        $visit->consume_holder =                 $request->input('consume_holder');

        $visit->save();

        $data = ['consume_needle', 'consume_mask', 'consume_ink','consume_glove',
        'consume_liquid', 'consume_healing','consume_soap','consume_anesthesia',
        'consume_calque','consume_holder'];

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

    public function delete(VisitRepository $visitRepo, $id) 
    {
        $visit = $visitRepo->delete($id);

        return back()->with('success','removed correctly');
    }

}

