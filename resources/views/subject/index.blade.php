@extends('layouts.master')
@extends('admin.layout')

@section('header')
    <h2>Subject List</h2>
@stop

@section('cont')
    <a href="subjects/create" class="btn btn-primary">Add new</a>
    <table class="table table-bordered table-responsive" style="margin-top: 10px;">
        <thead>
        <tr>
            <th>Subject_NO</th>
            <th>Name</th>
            <th>Instrument</th>
            <th>Created at</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($subjects as $subject)
            <tr>
                <td>{{ $subject->id }}</td>
                <td>{{ $subject->name }}</td>
                <td>{{ $subject->instrument }}</td>
                <td>{{ $subject->created_at }}</td>
                <td>
                    <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-success">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method'=>'delete', 'route'=>['subjects.destroy', $subject->id]]) !!}
                    {!! Form::submit('Delete', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Do you want to delete this record?")']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
