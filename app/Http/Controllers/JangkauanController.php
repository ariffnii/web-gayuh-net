<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JangkauanInternet as Model;

class JangkauanController extends Controller
{
    private $viewIndex = 'jangkauan_index';
    private $viewCreate = 'jangkauan_form';
    private $viewEdit = 'jangkauan_form';
    private $routePrefix = 'jangkauan_internet';
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
        return view('admin.' . $this->viewIndex, [
            'dataJangkauan' => $modelJangkauan,
            'routePrefix' => $this->routePrefix
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'modelJangkauan' => new Model(),
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
            'nama_kelurahan' => 'required',
            'ketersediaan_internet' => 'required|in:YA,TIDAK',
        ]);
        Model::create($requestData);
        flash('Data Berhasil disimpan');
        return redirect()->route('jangkauan_internet.index');
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
            'modelJangkauan' => Model::findOrFail($id),
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
            'nama_kelurahan' => 'required',
            'ketersediaan_internet' => 'required|in:YA,TIDAK',
        ]);
        $modelJangkauan = Model::findOrFail($id);
        $modelJangkauan->fill($requestData);
        $modelJangkauan->save();
        flash('Data Berhasil Diubah');
        return redirect()->route('jangkauan_internet.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $modelJangkauan = Model::findOrFail($id);
        $modelJangkauan->delete();
        flash("Data Berhasil Dihapus");
        return back();
    }


}
