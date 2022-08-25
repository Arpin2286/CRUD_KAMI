<?php

namespace App\Http\Controllers;

use App\Models\mMain;
use Illuminate\Http\Request;

class cMain extends Controller
{

    public function index()
    {
        $data = mMain::all();
        return view('index', ['data' => $data]);
    }

    public function create(Request $request)
    {
        mMain::insert([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'profesi' => $request->profesi,
        ]);
        return redirect('/')->with('success', 'Data Berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = mMain::where('id', $id)->first();
        return view('edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {

        mMain::where('id', $id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'profesi' => $request->profesi,
        ]);
        return redirect('/');
    }

    public function delete($id)
    {
        mMain::where('id', $id)->delete();
        return redirect('/');
    }
}