

{!! Form::text('nombre', $value = null, $attributes = ['placeholder'=>'Name']) !!}
{!! Form::text('apellido', $value = null, $attributes =  ['placeholder'=>'Last name'] ) !!}
{!! Form::number('cantidad', $value = null, $attributes =  ['placeholder'=>'Quantitity']) !!}
{!! Form::checkbox('validate', isset($data->validate) ? $data->validate : null , $attributes =  ['placeholder'=>'validate']) !!}
{!! Form::date('date_pay', isset($data->date_pay) ? $data->date_pay : null, $attributes =  ['placeholder'=>'Date pay']) !!}

{{$data->date_pay}}