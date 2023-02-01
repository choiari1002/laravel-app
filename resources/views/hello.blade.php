@extends('layout')

@section('title')
Hello
@endsection

@section('content')
<div style="font-size: 50px">
    Hello
</div>
<h1>1번 정보 가져오기(페이지타이틀)</h1>
<h3>{{ $title }}</h3>

<h1>2번 정보 가져오기(조원정보-배열로)</h1>
<ul>
    @foreach ($members as $member)
         <li>{{ $member }}</li>
    @endforeach
</ul>

<h1>3번 정보 가져오기(영화정보-객체로)</h1>
<h3>영화이름 : {{ $movie->mname }}</h3>ㅍ
<h3>영화평점 : {{ $movie->rating }}</h3>
<h3>영화리뷰 :
    <ul>
        @foreach ($movie->reviews as $i)
             <li>{{ $i }}</li>
        @endforeach
    </ul>
</h3>

@endsection