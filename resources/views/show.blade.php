@extends('layout')

@section('content')
    <h1 align= "center">SHOW</h1>
    <table align= "center">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>city</th>
            <th>country</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->city}}</td>
            <td>{{$student->country}}</td>
            <td><a href="/students/update/{{$student->id}}">update</a></td>
            <td><a href="/students/delete/{{$student->id}}">delete</a></td>

        </tr>
        @endforeach
        
    </table>

@endsection

