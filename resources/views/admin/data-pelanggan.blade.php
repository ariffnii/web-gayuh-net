@extends('layouts.app-new')
@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3>
                    Table Pelanggan
                </h3>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Id</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-center">Mark</td>
                        <td class="text-center">Otto</td>
                        <td class="text-center">@mdo</td>
                        <td class="text-center">@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
