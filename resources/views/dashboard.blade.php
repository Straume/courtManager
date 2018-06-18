@extends('layouts.app')

@section('content')
<h2>Your Dashboard</h2>

<a href='/courts/create' class='btn btn-primary' style='margin:25px'>Create court</a>

<h3>Your courts</h3>

<table class='table table-striped'>
    @foreach($courts as $court)
        <tr>
            <td style='text-align:center'>{{$court->name}}</td>
            <td><a href='/courts/{{$court->id}}/edit' class = 'btn btn-default'>Edit</a></td>
            <td>{!!Form::open(['action' => ['CourtsController@destroy', $court->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </td>
        </tr>
    @endforeach
</table>
@endsection