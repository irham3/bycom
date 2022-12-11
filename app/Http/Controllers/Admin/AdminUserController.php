<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index() {
        return view('admin.users.userLists');
    }
    public function getAllUsers()
    {
        $users = DB::table('users')
            ->select(
                'id as id',
                'name as name',
                'email as email')
            ->orderBy('id', 'asc')
            ->get();

            return DataTables::of($users)
            ->addColumn('action', function($user) {
                $html = '
                <a class="btn btn-info" href="/userView/'.$user->id.'">Edit</a>
                ';
                return $html;
            })
            ->make(true);
    }
}
