
@extends('layout')

@section('content')
    <h1>PREVIEW</h1>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>city</th>
            <th>country</th>
        </tr>

        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->city}}</td>
            <td>{{$student->country}}</td>
        </tr>
       
        
    </table>

@endsection

