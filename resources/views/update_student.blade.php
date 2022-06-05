@extends('layout')

@section('content')
    <h1>UPDATE STUDENT</h1>
    
    <form action="/students/update/{{$id}}" method="post">
        {{@csrf_field()}}
            {{-- <h6>id:         <input type="number" name="id" id=""> <br></h6> --}}
            <h6>name:       <input type="text" name="name" id=""> <br></h6> 
           
            <h6>age:        <input type="number" name="age" id=""> <br></h6>
            <h6>city:       <input type="text" name="city" id=""> <br></h6>
            <h6>Country:    <input type="text" name="country" id=""> <br></h6>
            <br>
            <br>
            <input type="submit">
        </form>


@endsection   