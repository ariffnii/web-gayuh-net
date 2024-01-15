@extends('layouts.app-sneat')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Form User</h5>
                <div class="card-body">
                    {!! Form::model($modelPegawai, ['route' => $route, 'method' => $method]) !!}
                    <div class="form-group mt-3">
                        {!! Form::label('name', 'Nama') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'autofocus']) !!}
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <div class="radio">
                            <label for="">Akses:</label>
                            <label style="margin-left: 2px">{!! Form::radio('akses', 'admin') !!} Admin</label>
                        </div>
                        <div class="radio">
                            <label style="margin-left: 52px">{!! Form::radio('akses', 'operator') !!} Operator</label>
                        </div>
                    </div>
                    <span class="text-danger">{{ $errors->first('akses') }}</span>
                    <div class="form-group mt-3">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('ppassword') }}</span>
                    </div>
                    <a href="{{ route('user.index') }}" class="btn btn-secondary mt-3 btn-sm">Kembali</a>
                    {!! Form::submit($button, ['class' => 'btn btn-primary mt-3 btn-sm']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
