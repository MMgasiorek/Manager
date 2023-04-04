<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;
use App\Models\Client;
use App\Models\Accessory;
use App\Repositories\VisitRepository;
use App\Repositories\EmployeerRepository;

use PDF;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(VisitRepository $visitRepo)
    {
        $amount = $visitRepo->total_amount();
        $time = $visitRepo->total_time();
        $visits = $visitRepo->total_visits();

        return view('admin.reports.index' , ['amount' => $amount,
                                             'time' => $time,
                                             'visits' => $visits,]);
    }

    public function mainReport(Request $request, VisitRepository $visitRepo)
    {
        $request->validate([
            'start'=> 'required',
            'end'=> 'required',
        ]);

        $start = $request->input('start');
        $end = $request->input('end');

        $accessories = Accessory::get();

        $amount = $visitRepo->total_amount();
        $time = $visitRepo->total_time();
        $visits   = count(Visit::where('created_at', '>=' , $start)
                                   ->where('created_at', '<=' , $end)->get());

        $total_clients = count(Client::get());  

        $data = [
            'start'         => $start,
            'end'           => $end ,
            'date'          => date('m/d/Y'),
            'accessories'   => $accessories,
            'total_amount'  => $amount,
            'total_time'    => $time,
            'visits'        => $visits ,
            'total_clients' => $total_clients,

        ];
          
        $pdf = PDF::loadView('admin.reports.main', $data);
    
        return $pdf->download('report.pdf');
    }

    public function employeerReport(Request $request, VisitRepository $visitRepo, EmployeerRepository $employRepo)
    {
        $request->validate([
            'start'=> 'required',
            'end'=> 'required',
        ]);

        $start = $request->input('start');
        $end = $request->input('end');
        $id = $request->input('employeer_id');

        $employeer = $employRepo->find($id);
        $total_money = $visitRepo->peroid_amount_by_employeer($id, $start, $end);
        $total_time = $visitRepo->peroid_time_by_employeer($id, $start, $end);
        

        $data = [
            'start'         => $start,
            'end'           => $end ,
            'date'          => date('m/d/Y'),
            'employeer'     => $employeer,
            'total_money'   => $total_money,
            'total_time'    => $total_time,

        ];

        $pdf = PDF::loadView('admin.reports.employeer', $data);
    
        return $pdf->download('report.pdf');
    }
}
