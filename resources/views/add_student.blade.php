@extends('layout')

@section('content')
<br>
    <h1 align= "center">ADD STUDENT</h1>
    
    <form align= "center" action="add" method="post">
        {{@csrf_field()}}
            <h6>name:       <input type="text" name="name" id=""> <br></h6> 
            <h6>age:        <input type="number" name="age" id=""> <br></h6>
            <h6>city:       <input type="text" name="city" id=""> <br></h6>
            <h6>Country:    <input type="text" name="country" id=""> <br></h6>
            <br>
            <br>
            <input type="submit">
        </form>


@endsection        