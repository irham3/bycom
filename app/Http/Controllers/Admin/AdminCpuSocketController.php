<?php

namespace App\Http\Controllers\Admin;

use App\Models\CPUSocket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AdminCpuSocketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pc-components.cpu-socket.index');
    }

    public function getAllData()
    {
        $data = DB::table('cpu_sockets')
            ->select(
                'id',
                'socketName',
                'introductionYear',
                'cpuVendor'
                )
            ->orderBy('id', 'asc')
            ->get();

        return DataTables::of($data)
        ->addColumn('action', function($datum) {
            return view('admin.pc-components.cpu-socket._aksi')->with('datum', $datum);
        })->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CPUSocket  $cPUSocket
     * @return \Illuminate\Http\Response
     */
    public function show(CPUSocket $cPUSocket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CPUSocket  $cPUSocket
     * @return \Illuminate\Http\Response
     */
    public function edit(CPUSocket $cPUSocket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CPUSocket  $cPUSocket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CPUSocket $cPUSocket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CPUSocket  $cPUSocket
     * @return \Illuminate\Http\Response
     */
    public function destroy(CPUSocket $cPUSocket)
    {
        //
    }
}
