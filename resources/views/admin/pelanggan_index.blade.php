@extends('layouts.app-sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Modal -->
            <div class="modal fade" id="dataPelanggan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Data Pelanggan</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @foreach ($dataPelanggan as $item)
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama depan    : </label>
                                    <label for="exampleFormControlInput1" class="form-label text-bold"> {{ $item->nama_depan }}</label>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Belakang : </label>
                                    <label for="exampleFormControlInput1" class="form-label text-bold"> {{ $item->nama_belakang }}</label>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Alamat        : </label>
                                    <label for="exampleFormControlInput1" class="form-label text-bold"> {{ $item->alamat }}</label>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir : </label>
                                    <label for="exampleFormControlInput1" class="form-label text-bold"> {{ $item->tanggal_lahir }}</label>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Telepon       : </label>
                                    <label for="exampleFormControlInput1" class="form-label text-bold"> {{ $item->telepon }}</label>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin : </label>
                                    <label for="exampleFormControlInput1" class="form-label text-bold"> {{ $item->jenis_kelamin }}</label>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Foto Profil   : </label>
                                    <label for="exampleFormControlInput1" class="form-label text-bold"> {{ $item->foto_profil }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Modal --}}
            <div class="card">
                <h5 class="card-header">Data Pelanggan</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">Telepon</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($dataPelanggan as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $item->nama_depan }}{{ $item->nama_belakang }}</td>
                                        <td class="text-center">{{ $item->alamat }}</td>
                                        <td class="text-center">{{ $item->telepon }}</td>
                                        <td class="text-center">
                                            {!! Form::open([
                                                'route' => ['pelanggan.destroy', $item->id],
                                                'method' => 'DELETE',
                                                'onsubmit' => 'return confirm("Anda yakin ingin menghapus data ini?")',
                                            ]) !!}
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#dataPelanggan">
                                                Detail
                                            </button>
                                            {{-- End Button --}}
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
                        {!! $dataPelanggan->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
