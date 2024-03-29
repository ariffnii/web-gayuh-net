<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as Model;

class UserController extends Controller
{
    private $viewIndex = 'pegawai_index';
    private $viewCreate = 'pegawai_form';
    private $viewEdit = 'pegawai_form';
    private $routePrefix = 'user';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modelPegawai = Model::where('akses', '<>', 'pelanggan')
        ->latest()
        ->paginate(50);
        return view('admin.' . $this->viewIndex, [
            'dataPegawai' => $modelPegawai,
            'routePrefix' => $this->routePrefix
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'modelPegawai' => new Model(),
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
            'name' => 'required',
            'email' => 'required|unique:users',
            'akses' => 'required|in:operator,admin',
            'password' => 'required'
        ]);
        $requestData['password'] = bcrypt($requestData['password']);
        $requestData['email_verified_at'] = now();
        Model::create($requestData);
        flash('Data Berhasil disimpan');
        return redirect()->route('user.index');
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
            'modelPegawai' => Model::findOrFail($id),
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
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$id,
            'akses' => 'required|in:operator,admin',
            'password' => 'nullable',
        ]);
        $modelPegawai = Model::findOrFail($id);
        if($requestData['password']==""){
            unset($requestData['password']);
        } else{
            $requestData['password'] = bcrypt($requestData['password']);
        }
        $modelPegawai->fill($requestData);
        $modelPegawai->save();
        flash('Data Berhasil Diubah');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $modelPegawai = Model::findOrFail($id);
        $modelPegawai->delete();
        flash("Data Berhasil Dihapus");
        return back();
    }
}
