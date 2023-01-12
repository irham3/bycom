<?php

namespace App\Http\Controllers;

use App\Models\BuildRecommendation;

class BerandaController extends Controller
{
    public function index()
    {
        // PC Kaum Kere - Hore
        $lowBuilds = BuildRecommendation::select('*')
                ->where('price', '<=', 10000000)->get();
        foreach ($lowBuilds as $lowBuild) {
            $lowBuild->formattedPrice = parent::rupiah($lowBuild->price);
        }

        // PC Kaum Mendang - mending
        $midBuilds = BuildRecommendation::select('*')
                ->where('price', '>', 10000000) 
                ->where('price', '<=', 20000000)->get();
        foreach ($midBuilds as $midBuild) {
            $midBuild->formattedPrice = parent::rupiah($midBuild->price);
        }

        // PC Kaum Sultan
        $highBuilds = BuildRecommendation::select('*')
                ->where('price', '>', 20000000)
                ->orderBy('price','ASC')->get();
        foreach ($highBuilds as $highBuild) {
            $highBuild->formattedPrice = parent::rupiah($highBuild->price);
        }
        
        return view('beranda', compact('lowBuilds', 'midBuilds', 'highBuilds'));
    }
}
