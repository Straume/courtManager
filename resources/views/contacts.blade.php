@extends('layouts.app')

@section('content')
<h2>Contact us</h2>

{!! Form::open(['url' => 'contacts/submit']) !!}
    <div  class='form-group'>
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '',['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
    </div>
    <div  class='form-group'>
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', '',['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
    </div>
    <div  class='form-group'>
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '',['class' => 'form-control', 'placeholder' => 'Enter Message'])}}
    </div>
    <div>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    </div>
    
{!! Form::close() !!}


@endsection