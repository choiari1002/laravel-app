@extends('layout')

@section('title')
Hello
@endsection

@section('content')
<div style="font-size: 50px">
    Hello
</div>
<h1>리스트</h1>
<ul>
    @foreach ($customers as $customer)
         <li>{{ $customer->name }}</li>
    @endforeach
</ul>

@endsection