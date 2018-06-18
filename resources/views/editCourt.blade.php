@extends('layouts.app')

@section('content')
<h2>Create an available court</h2>

{!! Form::open(['action' => ['CourtsController@update', $court->id], 'method' => 'POST']) !!}
    <div  class='form-group'>
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $court->name,['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
    </div>
    <div  class='form-group'>
        {{Form::label('adress', 'Adress')}}
        {{Form::text('adress', $court->adress,['class' => 'form-control', 'placeholder' => 'Enter Adress'])}}
    </div>
    <div  class='form-group'>
        {{Form::label('date', 'Date')}}
        {{Form::text('date', $court->date,['class' => 'form-control', 'placeholder' => 'Enter Date'])}}
    </div>
    <div  class='form-group'>
        {{Form::label('timeFrom', 'Time From')}}
        {{Form::text('timeFrom', $court->timeFrom,['class' => 'form-control', 'placeholder' => 'Enter Time From'])}}
    </div>
    <div  class='form-group'>
        {{Form::label('timeUntil', 'Time Until')}}
        {{Form::text('timeUntil', $court->timeUntil,['class' => 'form-control', 'placeholder' => 'Enter Time Until'])}}
    </div>
    <div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    </div>
    
{!! Form::close() !!}

@endsection
