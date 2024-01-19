<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pelanggan as Model;


class AdminPelangganController extends Controller
{
    private $viewIndex = 'pelanggan_index';
    private $routePrefix = 'pelanggan';
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchPelanggan = (string) $request->input('searchPelanggan');
        if ($searchPelanggan){
            $modelPelanggan = Model::where('nama_depan', 'LIKE', "%{$searchPelanggan}%")
            ->orWhere('nama_belakang', 'LIKE', "%{$searchPelanggan}%")
            ->orWhere('alamat', 'LIKE', "%{$searchPelanggan}%")
            ->orWhere('telepon', 'LIKE', "%{$searchPelanggan}%")
            ->paginate(50);
        }
        else {
            $modelPelanggan = Model::latest()->paginate(50);
        }
        return view('admin.' . $this->viewIndex, [
            'dataPelanggan' => $modelPelanggan,
            'routePrefix' => $this->routePrefix
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $modelPelanggan = Model::findOrFail($id);
        $modelPelanggan->delete();
        flash("Data Berhasil Dihapus");
        return back();
    }
}
