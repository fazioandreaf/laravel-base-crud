@extends('layouts.main_layout')
@section('content')
<form method="POST" action="{{route('insert_date')}}">
    @csrf
    @method('POST')
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="lastname">lastname</label>
    <input type="text" name="lastname" id="lastname">
    <label for="date_of_birth">Date of Birth</label>
    <input type="date" name="date_of_birth" id="date_of_birth">

    <label for="date_of_birth">document_type</label>
    <select name="document_type" id="document_type">

        <option value="">CI</option>
        <option value="">Driver License</option>
    </select>
    <label for="document_number" >document_number</label>
    <input type="text" name="document_number" id="document_number">
    <input type="submit">
</form>

@endsection
