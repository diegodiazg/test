@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Test/create</div>
                <a href="{!! url('test') !!}">Cancelar</a>
                <div class="card-body">
                    
                    {!! Form::open(array('url' => 'test')) !!}
                        
                        @include('tests.form')
                        {!! Form::submit('Save') !!}

                    {!! Form::close() !!}
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

