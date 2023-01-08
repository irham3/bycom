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

class AdminUserBuildController extends Controller
{
    public function index()
    {
        return view('admin.pc-builds.user-build.index');
    }

    public function getAllDatatable()
    {
        $data = DB::table('user_pc_builds as upb')
            ->join('users as u','upb.userId', '=', 'u.id')
            ->select(
                'upb.id as id',
                'u.id as userId',
                'u.email as userEmail',
                'upb.code as code',
                'upb.name as name',
                'upb.totalPrice as totalPrice'
            )->get();

        foreach ($data as $datum) {
            $datum->totalPrice = 'Rp ' . number_format($datum->totalPrice, 0, ',', '.');
        }

        return DataTables::of($data)
        ->addColumn('code', function($data) {
            return view('admin.pc-builds.user-build._link')->with('code', $data->code);
        })->make(true);
    }
}
