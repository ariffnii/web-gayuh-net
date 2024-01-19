@extends('layouts.app-sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Data Jangkauan Area Internet</h5>
                <div class="card-body">
                    <a href="{{ route('jangkauan_internet.create') }}" class="btn btn-primary mb-3"> Tambah Data</a>
                    {!! Form::open(['route' => $routePrefix . '.index', 'method' => 'GET']) !!}
                    <div class="input-group mb-3">
                        <input type="text" name="searchJangkauan" class="form-control" placeholder="Search"
                            aria-label="" aria-describedby="button-addon2" value="{{ request('searchJangkauan') }}">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2"><i
                            class="bx bx-search"></i></button>
                    </div>
                    {!! Form::close() !!}
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Kelurahan</th>
                                    <th class="text-center">Ketersediaan Internet</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataJangkauan as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $item->nama_kelurahan }}</td>
                                        <td class="text-center">{{ $item->ketersediaan_internet }}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                                'route' => ['jangkauan_internet.destroy', $item->id],
                                                'method' => 'DELETE',
                                                'onsubmit' => 'return confirm("Anda yakin ingin menghapus data ini?")',
                                            ]) !!}
                                            <a href="{{ route('jangkauan_internet.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm">Edit/Detail</a>
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
                        {!! $dataJangkauan->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
