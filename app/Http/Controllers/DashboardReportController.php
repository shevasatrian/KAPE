<?php

namespace App\Http\Controllers;

use App\Models\report;
use Illuminate\Http\Request;

class DashboardReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $report = report::select('*')
        //     ->get();
        // return view('dashboard.report.index', ['report' => $report]);


        // return view ('dashboard.report.index',[
        //     'report'=> report::all()
        // ]);

        $data =[
            'report' => report::all()
        ];
        return view('dashboard.report.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.report.tambahPO');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validasi(Request $request)
    {
        $report = $request-> validate([
            'noPO' => 'required',
            'tglPO' => 'required',
            'segmen' => 'required',
            'namaPkj' => 'required',
            'statusPkj' => 'required',
            'ppn' => 'required'
        ]);

        report :: create($report);
        $po=[
            'data' => report::all()
        ];

        return view ('dashboard.report.index',[$po]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(report $report)
    {
        return $report;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(report $report)
    {
        //
    }
}
