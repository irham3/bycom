<?php

namespace App\Http\Controllers\Admin;

use App\Models\CPUSocket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class AdminCpuSocketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pc-components.processor-socket.index');
    }

    public function getAllDatatable()
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
            return view('admin.pc-components._aksi')->with('actionUrl', 'processor-socket/'.$datum->id);
        })->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'socketName'      => ['required', 'string', 'max:255'],
            'introductionYear'     => ['required'],
            'cpuVendor'  => ['required'],
        ],
        [
            'socketName.required'   => 'Nama Socket harus diisi',
            'introductionYear.required'         => 'Tahun Diperkenalkan harus diisi',
            'cpuVendor.required'    => 'Vendor CPU harus diisi',
        ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            CPUSocket::create([
                'socketName'  => $request->socketName,
                'introductionYear'  => $request->introductionYear,
                'cpuVendor'  => $request->cpuVendor,
            ]);
            
            return response()->json(['success' => "Berhasil menyimpan data"]);
        }
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
    public function edit($id)
    {
        $data = CPUSocket::find($id);
        if($data)
        {
            return response()->json([
                'status'=> 200,
                'data'=> $data,
            ]);
        }
        else
        {
            return response()->json([
                'status'=> 404,
                'message'=>'No Data Is Found.'
            ]);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CPUSocket  $cPUSocket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'socketName'      => ['required', 'string', 'max:255'],
            'introductionYear'     => ['required'],
            'cpuVendor'  => ['required'],
        ],
        [
            'socketName.required'   => 'Nama Socket harus diisi',
            'introductionYear.required'         => 'Tahun Diperkenalkan harus diisi',
            'cpuVendor.required'    => 'Vendor CPU harus diisi',
        ]);

        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        } else {
            CPUSocket::where('id', $id)->update([
                'socketName'  => $request->socketName,
                'introductionYear'  => $request->introductionYear,
                'cpuVendor'  => $request->cpuVendor
            ]);
            return response()->json([
                'status'=>200,
                'message'=>'Data Updated Successfully.'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CPUSocket  $cPUSocket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CPUSocket::findOrFail($id)->delete();
    }
}
