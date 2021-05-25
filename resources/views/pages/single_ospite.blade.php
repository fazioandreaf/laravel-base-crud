@extends('layouts.main_layout')

@section('content')
<ul>
    <li>
        {{$single_ospite->name}}
    </li>
    <li>
        {{$single_ospite->lastname}}
    </li>
    <li>
        {{$single_ospite->date_of_birth}}
    </li>
    <li>
        {{$single_ospite->document_type}}
    </li>
    <li>
        {{$single_ospite->document_number}}
    </li>
    <li>
    {{$single_ospite->document_number}}
    </li>
</ul>
<a href="{{route('home')}}">Per ritornare indietro</a>

@endsection
