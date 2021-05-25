@extends('layouts.main_layout')
@section('content')
@foreach ($ospiti as $item)
<ul>
    <li>

        <a href="{{route('ospite_description',$item->id)}}">

            {{$item->name}}
            {{$item->lastname}}
        </a>
    </li>
</ul>

@endforeach


@endsection
