<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketInternet as Model;
class PaketInternetController extends Controller
{
    private $viewIndex = 'paketInternet_index';
    private $viewCreate = 'paketInternet_form';
    private $viewEdit = 'paketInternet_form';
    private $routePrefix = 'paket_internet';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.' . $this->viewIndex, [
            'dataPaket' => Model::
                latest()
                ->paginate(50)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'modelPaket' => new Model(),
            'method' => 'POST',
            'route' => $this->routePrefix . '.store',
            'button' => 'SIMPAN'
        ];
        return view('admin.' . $this->viewCreate, $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'nama_paket' => 'required',
            'kecepatan_download' => 'required',
            'kecepatan_upload' => 'required',
            'biaya_pasang' => 'required|numeric',
            'harga' => 'required|numeric',
            'deskripsi' => 'required'
        ]);
        Model::create($requestData);
        flash('Data Berhasil disimpan');
        return redirect()->route('paket_internet.index');
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
        $data = [
            'modelPaket' => Model::findOrFail($id),
            'method' => 'PUT',
            'route' => [$this->routePrefix.'.update', $id],
            'button' => 'UPDATE'
        ];
        return view('admin.' . $this->viewEdit, $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            'nama_paket' => 'required',
            'kecepatan_download' => 'required',
            'kecepatan_upload' => 'required',
            'biaya_pasang' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);
        $modelPaket = Model::findOrFail($id);
        $modelPaket->fill($requestData);
        $modelPaket->save();
        flash('Data Berhasil Diubah');
        return redirect()->route('paket_internet.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $modelPaket = Model::findOrFail($id);
        $modelPaket->delete();
        flash("Data Berhasil Dihapus");
        return back();
    }
}
