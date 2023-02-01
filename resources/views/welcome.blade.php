@extends('layout')

@section('title')
Welcome
@endsection

@section('content')
<div style="font-size: 50px">
    Welcome
</div>
<ul>
    @foreach ($books as $book)
         <li>{{ $book }}</li>
    @endforeach
</ul>
@endsection