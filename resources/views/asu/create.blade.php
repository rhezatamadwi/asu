@extends('template')

@section('content')
{{$var}}

@foreach($list_var as $li)
{{$li}}
@endforeach
@endsection