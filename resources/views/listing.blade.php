@extends('layout')
@section('content')
<center>
    <h1>{{$heading}}</h1>
    @if($listing != null)
        <h2> {{$listing['title']}} </h2>
        <p>{{$listing['description']}}</p>
        <span>Company: <a href="{{$listing['website']}}">{{$listing['company']}}</a></span>
    @else
        <h2>Nothing found!!</h2>
    @endif
</center>
@endsection
