@extends('layouts.app-sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Data Paket Internet</h5>
                <div class="card-body">
                    <a href="{{ route('paket_internet.create') }}" class="btn btn-primary mb-3"> Tambah Data</a>
                    {!! Form::open(['route' => $routePrefix . '.index', 'method' => 'GET']) !!}
                    <div class="input-group mb-3">
                        <input type="text" name="searchPaket" class="form-control" placeholder="Search" aria-label=""
                            aria-describedby="button-addon2" value="{{ request('searchPaket') }}">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2"><i
                                class="bx bx-search"></i></button>
                    </div>
                    {!! Form::close() !!}
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Paket</th>
                                    <th class="text-center">Kecepatan Download</th>
                                    <th class="text-center">Kecepatan Upload</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataPaket as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $item->nama_paket }}</td>
                                        <td class="text-center">{{ $item->kecepatan_download }}</td>
                                        <td class="text-center">{{ $item->kecepatan_upload }}</td>
                                        <td class="text-center">{{ $item->harga }}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                                'route' => ['paket_internet.destroy', $item->id],
                                                'method' => 'DELETE',
                                                'onsubmit' => 'return confirm("Anda yakin ingin menghapus data ini?")',
                                            ]) !!}
                                            <a href="{{ route('paket_internet.edit', $item->id) }}"
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
                        {!! $dataPaket->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
