<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Misi;
use Carbon\Carbon;

class AdminMisiController extends Controller
{
    public function index()
    {
        $misi = misi::all();

        return view('misi.misi',['misi'=> $misi]) ;
    }

    public function store(Request $request)
    {
        $request->validate([
            'misi' => 'required'
        ]);
        misi::create([
            'misi' => $request->misi,
        ]);
        return redirect()->route('misi.index');
    }

    
    public function update(Request $request,misi $misi)
    {
        $update = Carbon::today();
        $misi->update([
            'misi' => $request->misi,
            'updated_at' => $update
        ]);
        return redirect()->route('misi.index');
    }
}
