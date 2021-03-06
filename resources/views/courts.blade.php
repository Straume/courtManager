@extends('layouts.app')

@section('content')
<h2>List of available courts</h2>

@if(count($courts) > 0)
    @foreach($courts as $court)
    <h4><a href='/courts/{{$court->id}}'>{{$court->name}}</a></h4>
        <ul class='list-group' style="padding-bottom: 2%">
            <li class='list-group-item'>Adress: {{$court->adress}}</li>
            <li class='list-group-item'>Date: {{$court->date}}</li>
            <li class='list-group-item'>Time: {{$court->timeFrom}} - {{$court->timeUntil}}</li>
        </ul>
    @endforeach
@endif

@endsection