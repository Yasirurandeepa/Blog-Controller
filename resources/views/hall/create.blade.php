@extends('layouts.master')
@extends('admin.layout')

@section('header')
    <h2>Add New Hall</h2>
@stop

@section('cont')
    {!! Form::open(['url'=>'halls','class'=>'form-horizontal']) !!}
    <div class="form-group">
        {!! Form::label('size','Size', ['class'=>'control-label col-md-2' ]) !!}
        <div class="col-md-10">
            {!! Form::text('size',null, ['class'=>'form-control']) !!}
            {!! $errors->has('size')?$errors->first('size'):'' !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('description','Description', ['class'=>'control-label col-md-2' ]) !!}
        <div class="col-md-10">
            {!! Form::textarea('description',null, ['class'=>'form-control']) !!}
            {!! $errors->has('description')?$errors->first('description'):'' !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}

@stop
