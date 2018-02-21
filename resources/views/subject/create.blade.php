@extends('layouts.master')
@extends('admin.layout')

@section('header')
    <h2>Add New Subject</h2>
@stop

@section('cont')
    {!! Form::open(['url'=>'subjects','class'=>'form-horizontal']) !!}
    <div class="form-group">
        {!! Form::label('name','Name', ['class'=>'control-label col-md-2' ]) !!}
        <div class="col-md-10">
            {!! Form::text('name',null, ['class'=>'form-control']) !!}
            {!! $errors->has('name')?$errors->first('name'):'' !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('instrument','Instrument', ['class'=>'control-label col-md-2' ]) !!}
        <div class="col-md-10">
            {!! Form::text('instrument',null, ['class'=>'form-control']) !!}
            {!! $errors->has('instrument')?$errors->first('instrument'):'' !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}

@stop
