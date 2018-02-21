@extends('layouts.master')
@extends('admin.layout')

@section('header')
    <h2>Hall List</h2>
@stop

@section('cont')
    <a href="halls/create" class="btn btn-primary">Add new</a>
    <table class="table table-bordered table-responsive" style="margin-top: 10px;">
        <thead>
        <tr>
            <th>Hall_NO</th>
            <th>Hall_Size</th>
            <th>Description</th>
            <th>Created at</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($halls as $hall)
        <tr>
            <td>{{ $hall->id }}</td>
            <td>{{ $hall->size }}</td>
            <td>{{ $hall->description }}</td>
            <td>{{ $hall->created_at }}</td>
            <td>
                <a href="{{ route('halls.edit', $hall->id) }}" class="btn btn-success">Edit</a>
            </td>
            <td>
                {!! Form::open(['method'=>'delete', 'route'=>['halls.destroy', $hall->id]]) !!}
                {!! Form::submit('Delete', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Do you want to delete this record?")']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop
