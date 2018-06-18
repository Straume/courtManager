@extends('layouts.app')

@section('content')
<h2>Create a new court vacancy</h2>

{!! Form::open(['action' => 'CourtsController@store', 'method' => 'POST']) !!}
    <div  class='form-group'>
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '',['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
    </div>
    <div  class='form-group'>
        {{Form::label('adress', 'Adress')}}
        {{Form::text('adress', '',['class' => 'form-control', 'placeholder' => 'Enter Adress'])}}
    </div>
    <div  class='form-group'>
        {{Form::label('date', 'Date')}}
        {{Form::text('date', '',['class' => 'form-control', 'placeholder' => 'Enter Date'])}}
    </div>
    <div  class='form-group'>
        {{Form::label('timeFrom', 'Time From')}}
        {{Form::text('timeFrom', '',['class' => 'form-control', 'placeholder' => 'Enter Time From'])}}
    </div>
    <div  class='form-group'>
        {{Form::label('timeUntil', 'Time Until')}}
        {{Form::text('timeUntil', '',['class' => 'form-control', 'placeholder' => 'Enter Time Until'])}}
    </div>
    <div>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    </div>
    
{!! Form::close() !!}

@endsection
