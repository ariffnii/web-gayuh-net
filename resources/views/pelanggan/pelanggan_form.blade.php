@extends('layouts.app-sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Form Data Paket Internet</h5>
                <div class="card-body">
                    {!! Form::model($modelPaket, ['route' => $route, 'method' => $method]) !!}
                    <div class="form-group mt-3">
                        {!! Form::label('nama_paket', 'Nama Paket Internet') !!}
                        {!! Form::text('nama_paket', null, ['class' => 'form-control', 'autofocus']) !!}
                        <span class="text-danger">{{ $errors->first('nama_paket') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('kecepatan_download', 'Kecepatan Download') !!}
                        {!! Form::text('kecepatan_download', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('kecepatan_download') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('kecepatan_upload', 'Kecepatan Upload') !!}
                        {!! Form::text('kecepatan_upload', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('kecepatan_upload') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('biaya_pasang', 'Biaya Pasang') !!}
                        {!! Form::number('biaya_pasang', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('biaya_pasang') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('harga', 'Harga/Bulan') !!}
                        {!! Form::number('harga', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('harga') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('deskripsi', 'Deskripsi Paket') !!}
                        {!! Form::textarea('deskripsi', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                    </div>
                    <a href="{{ route('paket_internet.index') }}" class="btn btn-secondary mt-3 btn-sm">Kembali</a>
                    {!! Form::submit($button, ['class' => 'btn btn-primary mt-3 btn-sm']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
