@extends('layouts.app-sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Form Data Jangkauan Area Internet</h5>
                <div class="card-body">
                    {!! Form::model($modelJangkauan, ['route' => $route, 'method' => $method]) !!}
                    <div class="form-group mt-3">
                        {!! Form::label('nama_kelurahan', 'Nama Kelurahan') !!}
                        {!! Form::text('nama_kelurahan', null, ['class' => 'form-control', 'autofocus']) !!}
                        <span class="text-danger">{{ $errors->first('nama_kelurahan') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <div class="radio">
                            <label for="">Ketersediaan Internet:</label>
                            <label style="margin-left: 2px">{!! Form::radio('ketersediaan_internet', 'YA') !!} Tersedia</label>
                        </div>
                        <div class="radio">
                            <label style="margin-left:10pc">{!! Form::radio('ketersediaan_internet', 'TIDAK') !!} Tidak Tersedia</label>
                        </div>
                    </div>
                    <a href="{{ route('jangkauan_internet.index') }}" class="btn btn-secondary mt-3 btn-sm">Kembali</a>
                    {!! Form::submit($button, ['class' => 'btn btn-primary mt-3 btn-sm']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
