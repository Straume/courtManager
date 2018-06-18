@extends('layouts.app')

@section('content')
<h2>{{$court->name}}</h2>
<ul class='list-group' style="padding-bottom: 2%">
    <li class='list-group-item'>Adress: {{$court->adress}}</li>
    <li class='list-group-item'>Date: {{$court->date}}</li>
    <li class='list-group-item'>Time: {{$court->timeFrom}} - {{$court->timeUntil}}</li>
</ul>
<a href='/courts' class='btn btn-default'>Back</a>

@if(!Auth::guest())
    @if(Auth::user()->id == $court->user_id)
        <a href='/courts/{{$court->id}}/edit' class='btn btn-default'>Edit</a>

        {!!Form::open(['action' => ['CourtsController@destroy', $court->id], 'method' => 'POST'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete',['class' => 'btn btn-danger','style' => 'margin-top:10px'])}}
        {!!Form::close()!!}
    @endif
@endif
@endsection
