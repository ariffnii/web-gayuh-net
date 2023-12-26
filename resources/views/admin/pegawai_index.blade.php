@extends('layouts.app-sneat')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Data Pegawai</h5>
            <div class="card-body">
                <a href="{{ route('user.create') }}" class="btn btn-primary"> Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">nama</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Akses</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dataPegawai as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $item->name }}</td>
                                    <td class="text-center">{{ $item->email }}</td>
                                    <td class="text-center">{{ $item->akses }}</td>
                                    <td class="text-center">
                                        {!! Form::open([
                                            'route' =>['user.destroy', $item->id],
                                            'method' => 'DELETE',
                                            'onsubmit' => 'return confirm("Anda yakin ingin menghapus data ini?")',
                                        ]) !!}
                                        <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">data tidak ada</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {!! $dataPegawai->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
