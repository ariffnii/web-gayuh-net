@extends('layouts.app-sneat')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Form User</h5>
            <div class="card-body">
                {!! Form::model($model, ['route' => $route, 'method' => $method]) !!}
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
                    {!! Form::label('akses', 'Hak Akses') !!}
                    {!! Form::select('akses',[
                        'operator' => 'Operator',
                        'admin' => 'Administrator'
                    ], null, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('akses') }}</span>
                </div>
                <div class="form-group mt-3">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('ppassword') }}</span>
                </div>
                {!! Form::submit($button, ['class' => 'btn btn-primary mt-3']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection