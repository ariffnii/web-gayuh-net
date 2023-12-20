<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan as Model;


class PelangganController extends Controller
{
    private $viewIndex = 'pelanggan_index';
    private $viewCreate = 'pelanggan_form';
    private $viewEdit = 'pelanggan_form';
    private $routePrefix = 'pelanggan';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('operator.' . $this->viewIndex, [
            'models' => Model::where('akses', '<>', 'pelanggan')
                ->latest()
                ->paginate(50)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'model' => new Model(),
            'method' => 'POST',
            'route' => $this->routePrefix . '.store',
            'button' => 'SIMPAN'
        ];
        return view('operator.' . $this->viewCreate, $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'akses' => 'required|in:operator,admin',
            'password' => 'required'
        ]);
        $requestData['password'] = bcrypt($requestData['password']);
        $requestData['email_verified_at'] = now();
        Model::create($requestData);
        flash('Data Berhasil disimpan');
        return redirect()->route('pelanggan.index');
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
            'model' => Model::findOrFail($id),
            'method' => 'PUT',
            'route' => [$this->routePrefix.'.update', $id],
            'button' => 'UPDATE'
        ];
        return view('operator.' . $this->viewEdit, $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$id,
            'akses' => 'required|in:operator,admin',
            'password' => 'nullable',
        ]);
        $model = Model::findOrFail($id);
        if($requestData['password']==""){
            unset($requestData['password']);
        } else{
            $requestData['password'] = bcrypt($requestData['password']);
        }
        $model->fill($requestData);
        $model->save();
        flash('Data Berhasil Diubah');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Model::findOrFail($id);
        $model->delete();
        flash("Data Berhasil Dihapus");
        return back();
    }
}
