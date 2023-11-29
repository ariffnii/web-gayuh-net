<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as Model;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('operator.user_index', [
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
            'model' => new \App\Models\User(),
            'method' => 'POST',
            'route' => 'user.store',
            'button' => 'SIMPAN'
        ];
        return view('operator.user_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'akses' => 'required|in:petugas,admin',
            'password' => 'required'
        ]);
        $requestData['password'] = bcrypt($requestData['password']);
        $requestData['email_verified_at'] = now();
        Model::create($requestData);
        flash('Data Berhasil disimpan');
        return back();
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
