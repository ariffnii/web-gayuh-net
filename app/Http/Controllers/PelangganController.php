<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Pelanggan as Model;


class PelangganController extends Controller
{
    private $viewIndex = 'pelanggan_index';
    private $routePrefix = 'pelanggan';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'dataPelanggan' => Model::
                latest()
                ->paginate(15)
        ];
        return view('admin.' . $this->viewIndex, $data);
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
