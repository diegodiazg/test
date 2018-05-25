@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <a href="{!! url('test/create') !!}">Create </a>
                <div class="card-body">
                    @foreach($all as $item)
                        {{$item->nombre}}
                        <a href="{!! url('test/'. $item->id.'/edit')!!}">Edit</a>
                    @endforeach                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

