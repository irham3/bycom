<?php

namespace App\Http\Controllers;

use App\Models\PcBuild;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RakitanKuController extends Controller
{
    public function index()
    {
        $listRakitan = PcBuild::where('userId', Auth::user()->id)->get();
        foreach ($listRakitan as $rakitan) {
            $rakitan->totalPrice = parent::rupiah($rakitan->totalPrice);
        }
        
        return view('rakitanku.index', compact('listRakitan'));
    }
}
