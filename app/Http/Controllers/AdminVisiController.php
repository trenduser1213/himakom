<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visi;
use Carbon\Carbon;

class AdminVisiController extends Controller
{
    public function index()
    {
        $visi = visi::all();

        return view('visi.index',['visi'=> $visi]) ;
    }

    public function create()
    {
        return view('visi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required'
        ]);
        visi::create([
            'visi' => $request->visi,
        ]);
        return redirect()->route('visi.index');
    }
    public function edit(Visi $visi)
    {
        return view('visi.edit',['visi'=> $visi]);
    }
    
    public function update(Request $request,visi $visi)
    {
        $update = Carbon::today();
        $visi->update([
            'visi' => $request->visi,
            'updated_at' => $update
        ]);
        return redirect()->route('visi.index');
    }

    public function destroy($visi)
    {
        $data=visi::find($visi);
        $data->delete();

        return redirect()->route('visi.index');
    }
}
