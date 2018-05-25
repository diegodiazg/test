@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Test/Edit</div>
                <a href="{!! url('test') !!}">Cancelar</a>
                <div class="card-body">
       

                    {!! Form::model($data, ['url' => ['test', $data->id], 'method'=>'PUT' ] ) !!}
                        
                        @include('tests.form')
                        {!! Form::submit('Update') !!}

                    {!! Form::close() !!}
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
