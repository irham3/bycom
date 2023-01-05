<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cpu;
use App\Models\Gpu;
use App\Models\User;
use Ramsey\Uuid\Uuid;
use App\Models\Memory;
use App\Models\PcCase;
use App\Models\Motherboard;
use App\Models\PowerSupply;
use Illuminate\Http\Request;
use App\Models\InternalStorage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AdminPcBuildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $uuid = Uuid::uuid4();

        // $uuid = substr($uuid->toString(), 0, 6);
        // dd($uuid);

        $userCount = User::select('id','name')->get();
        $cpuCount = Cpu::select('id','name')->get();
        $moboCount = Motherboard::select('id','name')->get();
        $gpuCount = Gpu::select('id','name')->get();
        $memoryCount = Memory::select('id','name')->get();
        $psuCount = PowerSupply::select('id','name')->get();
        $storageCount = InternalStorage::select('id','name')->get();
        $caseCount = PcCase::select('id','name')->get();

        return view('admin.pc-builds.index');
    }

    public function getAllData()
    {
        $data = DB::table('pc_builds as pb')
            ->join('users as u','pb.userId', '=', 'u.id')
            ->select(
                'pb.id as id',
                'u.id as userId',
                'u.email as userEmail',
                'pb.image as image',
                'pb.code as code',
                'pb.name as name',
                'pb.totalPrice as totalPrice'
            )->get();

        foreach ($data as $datum) {
            $datum->totalPrice = 'Rp ' . number_format($datum->totalPrice, 0, ',', '.');
        }

        return DataTables::of($data)
            ->addColumn('image', function($data) {
                return view('admin.pc-builds._gambar')->with('imgName', $data->image);
            })
            ->addColumn('action', function($data) {
                return view('admin.pc-components._aksi')->with('actionUrl', '/pc-build/' . $data->id);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
