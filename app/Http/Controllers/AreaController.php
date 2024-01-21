<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JangkauanInternet as Model;

class AreaController extends Controller
{
    private $viewIndex = 'jangkauan_index';
    private $routePrefix = 'pelanggan.jangkauan_internet';
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchJangkauan = (string) $request->input('searchJangkauan');
        if ($searchJangkauan){
            $modelJangkauan = Model::where('nama_kelurahan', 'LIKE', "%{$searchJangkauan}%")
            ->orWhere('ketersediaan_internet', 'LIKE', "%{$searchJangkauan}%")
            ->paginate(50);
        }
        else {
            $modelJangkauan = Model::latest()->paginate(50);
        }
        return view('pelanggan.' . $this->viewIndex, [
            'dataJangkauan' => $modelJangkauan,
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
        //
    }
}
